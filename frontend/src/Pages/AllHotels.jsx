import React from 'react'
import Header from '../Components/Header'
import { useEffect, useState } from 'react'
import axios from 'axios'

export default function AllHotels() {
    const [ hotels, setHotels ] = useState([])
    const [ filteredHotels, setFilteredHotels ] = useState([])

    const [ fromDate, setFormDate ] = useState("")
    const [ toDate, setTotDate ] = useState("")
    const [ dest, setDest ] = useState("")

    const fetchHotels = async() => {
       await axios.get("http://127.0.0.1:8001/api/hotels")
        .then(response => {
            setHotels(response.data.data)
            return response
        })
        .catch(error => {
            console.log(error)
        })
    }


    const filterHotels = async(e) => {
        e.preventDefault()
        await axios.post("http://127.0.0.1:8001/api/filter", {
            from_date: fromDate,
            to_date: toDate,
            destination: dest
        })
        .then(response => {
            setFilteredHotels(response.data.data)
            return response
        })
        .catch(error => {
            console.log(error)
        })

        // console.log(response.data.data)
    }

    useEffect(()=>{
        fetchHotels()
    }, [])


  return (
    <div className="main-body">
        <div className="w-full h-[280px] bg-blue-100 flex items-center justify-center">
            <div
                className="search-filter w-[70%] h-[120px] p-5 shadow-xl rounded-xl
             flex items-center justify-between gap-7"
            >
                <input
                    className="w-[100%] p-3 border-2 outline-none"
                    type="text"
                    placeholder="Search Destination"
                    onChange={(e) => setDest(e.target.value)}
                />

                <input
                    className="w-full p-3 border-2"
                    type="date"
                    placeholder="MM/DD/YYYY"
                    onChange={(e) => setFormDate(e.target.value)}
                />
                <label htmlFor="">To</label>
                <input
                    className="w-full p-3 border-2"
                    type="date"
                    placholder="Pick date"
                    onChange={(e) => setTotDate(e.target.value)}
                />
                <button onClick={filterHotels} className="w-[100%] bg-rose-600 text-white rounded-full p-2">
                    Filter
                </button>
                {/* </div> */}
            </div>
        </div>

        <div className="container mx-auto w-[100%] lg:w-full md:w-[70%] my-7">
            {
                filteredHotels.length === 0 ?
                    hotels.map((h) => (
                        <div className="border flex flex-col rounded my-5 shadow-lg">
                            <div className="card-section flex">
                                <img className="w-[40%] object-cover" src={h.image} alt="" />
                                <div>
                                    <p className="text-xl mx-5 my-5">{h.hotel_name}</p>
                                    <p className="text-lg mx-5 my-5 text-slate-500">
                                        {h.description}
                                    </p>

                                    <p className="mx-5 rounded-full bg-blue-300 w-[10%] text-center m-3">{h.review}</p>
                                    <button className="mx-5 bg-rose-500 p-2 rounded text-white">Let's book</button>
                                </div>

                            </div>
                        </div>
                    ))

                    :

                    filteredHotels.map((fh) => (
                        <div className="border flex flex-col rounded my-5 shadow-lg">
                        <div className="card-section flex">
                            <img className="w-[40%] object-cover" src={fh.image} alt="" />
                            <div>
                                <p className="text-xl mx-5 my-5">{fh.hotel_name}</p>
                                <p className="text-lg mx-5 my-5 text-slate-500">
                                    {fh.description}
                                </p>

                                <p className="mx-5 rounded-full bg-blue-300 w-[10%] text-center m-3">{fh.review}</p>
                                <button className="mx-5 bg-rose-500 p-2 rounded text-white">Let's book</button>
                            </div>

                        </div>
                    </div>
                    ))




            }





        </div>

    </div>
  )
}
