import React from "react";
import Header from "../Components/Header";
import HotelCard from "../Components/HotelCard";
import Trending from "../Components/Trending";
import axios from 'axios'
import { useEffect, useState } from "react";


function Home() {
    const [ dest, setDest] = useState([])
    const [ hotel, setHotel ] = useState([])

    const fetchDestinations = async() => {
        await axios.get("http://127.0.0.1:8001/api/destinations")
        .then(response => {
            setDest(response.data.data)
            console.log(response.data.data)
            return response.data
        })
        .catch(error => {
            console.log(error)
        })

    }

    const fetchHotels = async() => {
        await axios.get("http://127.0.0.1:8001/api/hotels")
        .then(response => {
            setHotel(response.data.data)
            return response.data
        })
        .catch(error => {
            console.error(error)
        })
    }

    useEffect(()=> {
        fetchDestinations()
        fetchHotels()
    }, [])

    return (
        <div className="main-body">
            <div className="header">
                <Header />
            </div>
            {/* <div className="category-section">
                <Category />
            </div> */}
            <div className="container mx-auto w-full my-5">
                <h1 className="text-3xl font-bold text-slate-700">Special places</h1>
            </div>
            <div className="hotel-section w-full grid grid-cols-1 md:grid-cols-4 container md:mx-auto mx-2 gap-4 my-5 gap-y-4">
                {
                    hotel.map((h) => (
                        <HotelCard
                            hotelTitle={h.hotel_name}
                            hotelImg={h.image}
                            hotelDesc={h.description}
                            review={h.review}
                        />
                    ))
                }

            </div>
            <div className="container mx-2 md:mx-auto my-5">
                <p className="text-2xl font-bold text-slate-600">TRENDING DESTINATIONS</p>
                    <div className="grid grid-cols-1 md:grid-cols-3 gap-4 my-5">
                        {
                            dest.map((d) => (
                                <Trending
                                 trendingTitle={d.destination_name}
                                  trendingImage={d.thumbnail} />
                            ))
                        }
                    </div>

            </div>
        </div>
    );
}

export default Home;
