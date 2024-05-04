import React from "react";
import img1 from "../assets/dest1.jpg";

export default function HotelCard() {
    return (
        <div className="max-w-sm bg-white rounded-xl shadow">
            <a href="#">
                <img className="rounded-t-lg" src={img1} alt="" />
            </a>
            <div className="p-5">
                <a href="#">
                    <h5 className="mb-2 text-2xl font-bold tracking-tight">
                        Title here
                    </h5>
                </a>
                <p className="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Lorem ipsum dolor lorem ipsum dolor
                </p>
                <p className="w-[20%] text-center text-white mb-3 font-normal text-gray-700 bg-blue-600 rounded-full">
                    8.9
                </p>
                <a
                    href="#"
                    className="inline-flex items-center px-3 py-2 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Book now
                </a>
            </div>
        </div>
    );
}
