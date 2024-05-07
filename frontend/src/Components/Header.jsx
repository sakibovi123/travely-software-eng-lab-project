import React from "react";

export default function Header() {
    return (
        <div className="w-full h-[280px] bg-blue-100 flex items-center justify-center">
            <div
                className="search-filter w-[70%] h-[120px] p-5 shadow-xl rounded-xl
             flex items-center justify-between gap-7"
            >
                <input
                    className="w-[100%] p-3 border-2 outline-none"
                    type="text"
                    placeholder="Search Destination"
                />

                <input
                    className="w-full p-3 border-2"
                    type="date"
                    placeholder="MM/DD/YYYY"
                />
                <label htmlFor="">To</label>
                <input
                    className="w-full p-3 border-2"
                    type="date"
                    placholder="Pick date"
                />
                <button className="w-[100%] bg-rose-600 text-white rounded-full p-2">
                    Filter
                </button>
                {/* </div> */}
            </div>
        </div>
    );
}
