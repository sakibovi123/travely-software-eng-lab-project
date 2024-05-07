import React from 'react'
import Header from '../Components/Header'

export default function AllHotels() {
  return (
    <div className="main-body">
        <Header />

        <div className="container mx-auto w-[60%] my-7">
            <div className="border flex flex-col rounded">
                <div className="card-section flex">
                    <img className="w-[40%] object-cover" src="https://images.pexels.com/photos/2662116/pexels-photo-2662116.jpeg?cs=srgb&dl=pexels-jaime-reimer-1376930-2662116.jpg&fm=jpg" alt="" />
                    <div>
                        <p className="text-xl mx-5">Title Goes here</p>
                        <p className="text-lg mx-5 my-5 text-slate-500">Description Goes here</p>

                        <a href="">Let's book</a>
                    </div>


                </div>
            </div>
        </div>

    </div>
  )
}
