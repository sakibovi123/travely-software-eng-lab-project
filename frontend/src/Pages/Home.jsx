import React from "react";
import Header from "../Components/Header";
import HotelCard from "../Components/HotelCard";

function Home() {
    return (
        <div className="main-body">
            <div className="header">
                <Header />
            </div>
            {/* <div className="category-section">
                <Category />
            </div> */}

            <div className="hotel-section w-full grid grid-cols-4 container mx-auto gap-4 my-5 gap-y-4">
                <HotelCard />
                <HotelCard />
                <HotelCard />
                <HotelCard />

                <HotelCard />
                <HotelCard />
                <HotelCard />
                <HotelCard />
            </div>
        </div>
    );
}

export default Home;
