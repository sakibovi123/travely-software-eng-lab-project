import { useEffect, useState } from "react"
import React from 'react'
import axios from 'axios'

export default function Trending({trendingTitle, trendingImage})
{
    const styles = {
        backgroundImage: `url(${trendingImage})`
    }
  return (


    <div className="w-full relative cursor-pointer">
        <img src={trendingImage} alt="" className="rounded-xl shadow-xl filter brightness-75" />
        <div className="absolute bottom-[20px] px-4 py-3 w-full bg-transparent">
            <h1 className="font-semibold text-4xl bg-transparent text-white"> {trendingTitle} </h1>
        </div>
</div>
  )
}
