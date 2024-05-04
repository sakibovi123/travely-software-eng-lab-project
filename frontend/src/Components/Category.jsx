import React from "react";
import { FaHome } from "react-icons/fa";

export default function Category(icon_name, label) {
    return (
        <div className="w-full flex items-start my-[70px] mx-auto">
            <div className="w-full flex flex-col justify-center cursor-pointer gap-3">
                {/* <img src={countryImg} alt="" /> */}
                <p>Country Side</p>
            </div>
        </div>
    );
}
