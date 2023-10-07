<x-layout>
    <div class="flex flex-col md:flex-row items-center pb-4 border-b-2 border-primary-800 text-secondary-900">
        <div class="w-11/12 md:w-7/12 mx-auto mt-4">
            <?php if($property->photo) : ?>
                <img src="{{asset('storage/' . $property->photo)}}" alt="">
            <?php else : ?>
                <div class="bg-primary-800 flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cccccc" class="w-1/4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <h3 class="text-primary-100 text-2xl font-bold">No Photo Available</h3>
                </div>
            <?php endif; ?>
        </div>
        <div class="px-4 grow py-4 mt-4">
            <div class="w-11/12 mx-auto">
                <div>
                    <h3 class="border-b-2 border-primary-800 mb-2 text-3xl font-bold">
                        {{$property->title}}
                    </h3>
                    <div class="flex flex-row">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#007c5f" class="w-8 h-8 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <div>
                            <div>
                                <span class="text-xl">{{$property->street}}, </span>
                                <span class="text-xl">{{$property->city}}, </span>
                                <span class="text-xl">{{$property->plz}}</span>
                            </div>
                            <div>
                                <span class="text-xl">{{$property->state}}, </span>
                                <span class="text-xl">{{$property->country}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <h3 class="font-bold border-b-2 border-primary-800 mb-2 text-2xl">
                            Contact Agent
                        </h3>
                        <div class="flex flex-row mt-2 text-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#007c5f" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            <span class="ml-2">{{$property->agentfirstname}} {{$property->agentlastname}}</span>
                        </div>
                        <div class="flex flex-row mt-2 text-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#007c5f" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                            <span class="ml-2">{{$property->agentemail}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-row items-center w-fit mt-6 mx-auto md:mx-8 border-2 border-primary-800 rounded text-secondary-900">
        <div class="flex flex-col items-center border-r-2 border-primary-700 py-2 px-4 md:px-8 m-2 ">
            <div class="flex flex-col">
                <span><?php if($property->purchasetype === "Rent"){echo "Monthly Rent";}
                    else{echo "Asking Price";} ?>
                </span>
                <span class="text-xl font-bold">${{number_format($property->price)}}</span>
            </div>
        </div>
        <div class="flex flex-col items-center border-r-2 border-primary-700 py-2 px-4 md:px-8 m-2 ">
            <div class="flex flex-col">
                <span class="mr-2">Square Feet</span>
                <div class="flex flex-row">
                    <svg stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary-800" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V3M14.4286 10L12.8153 8.26266C12.408 7.82396 12.2043 7.6046 11.9659 7.52324C11.7565 7.45174 11.5292 7.45174 11.3198 7.52324C11.0814 7.6046 10.8778 7.82396 10.4704 8.26266L7.42753 11.5396C7.26951 11.7098 7.1905 11.7948 7.13411 11.8925C7.0841 11.979 7.04735 12.0726 7.0251 12.1701C7 12.28 7 12.3961 7 12.6283V15.4C7 15.9601 7 16.2401 7.10899 16.454C7.20487 16.6422 7.35785 16.7951 7.54601 16.891C7.75992 17 8.03995 17 8.6 17H18.4C18.9601 17 19.2401 17 19.454 16.891C19.6422 16.7951 19.7951 16.6422 19.891 16.454C20 16.2401 20 15.9601 20 15.4V12.6283C20 12.3961 20 12.28 19.9749 12.1701C19.9526 12.0726 19.9159 11.979 19.8659 11.8925C19.8095 11.7948 19.7305 11.7098 19.5725 11.5396L18.1429 10C17.9623 9.80555 17.872 9.70833 17.7812 9.6458C17.4397 9.41088 16.9888 9.41088 16.6474 9.6458C16.5566 9.70833 16.4663 9.80555 16.2857 10C16.1052 10.1944 16.0149 10.2917 15.924 10.3542C15.5826 10.5891 15.1317 10.5891 14.7903 10.3542C14.6994 10.2917 14.6091 10.1944 14.4286 10Z" stroke="#007c5f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="text-xl ml-2 font-bold">{{number_format($property->size)}}</span>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center border-r-2 border-primary-700 py-2 px-4 md:px-8 m-2 ">
            <div class="flex flex-col">
                <span>Bedrooms</span>
                <div class="flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" stroke="#007c5f" class="w-6 h-6 text-secondary-400" height="24" viewBox="0 -960 960 960" width="24"><path d="M80-200v-240q0-27 11-49t29-39v-112q0-50 35-85t85-35h160q23 0 43 8.5t37 23.5q17-15 37-23.5t43-8.5h160q50 0 85 35t35 85v112q18 17 29 39t11 49v240h-80v-80H160v80H80Zm440-360h240v-80q0-17-11.5-28.5T720-680H560q-17 0-28.5 11.5T520-640v80Zm-320 0h240v-80q0-17-11.5-28.5T400-680H240q-17 0-28.5 11.5T200-640v80Zm-40 200h640v-80q0-17-11.5-28.5T760-480H200q-17 0-28.5 11.5T160-440v80Zm640 0H160h640Z"/></svg>
                    <span class="text-xl ml-2 font-bold">{{$property->bedrooms}}</span>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center py-2 px-4 md:px-8 m-2 ">
            <div class="flex flex-col">
                <span>Bathrooms</span>
                <div class="flex flex-row">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M360-240q17 0 28.5-11.5T400-280q0-17-11.5-28.5T360-320q-17 0-28.5 11.5T320-280q0 17 11.5 28.5T360-240Zm120 0q17 0 28.5-11.5T520-280q0-17-11.5-28.5T480-320q-17 0-28.5 11.5T440-280q0 17 11.5 28.5T480-240Zm120 0q17 0 28.5-11.5T640-280q0-17-11.5-28.5T600-320q-17 0-28.5 11.5T560-280q0 17 11.5 28.5T600-240ZM360-360q17 0 28.5-11.5T400-400q0-17-11.5-28.5T360-440q-17 0-28.5 11.5T320-400q0 17 11.5 28.5T360-360Zm120 0q17 0 28.5-11.5T520-400q0-17-11.5-28.5T480-440q-17 0-28.5 11.5T440-400q0 17 11.5 28.5T480-360Zm120 0q17 0 28.5-11.5T640-400q0-17-11.5-28.5T600-440q-17 0-28.5 11.5T560-400q0 17 11.5 28.5T600-360ZM280-480h400v-40q0-83-58.5-141.5T480-720q-83 0-141.5 58.5T280-520v40Zm62-60q8-51 46.5-85.5T480-660q53 0 91.5 34.5T618-540H342ZM160-80q-33 0-56.5-23.5T80-160v-640q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v640q0 33-23.5 56.5T800-80H160Zm0-80h640v-640H160v640Zm0 0v-640 640Z"/></svg>
                    <span class="text-xl ml-2 font-bold">{{$property->bathrooms}}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="w-11/12 mx-auto mt-6 text-secondary-900">
        <div class="flex flex-row">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#009900" class="w-8 h-8 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
            </svg>
            <h3 class="text-xl">About</h3>
        </div>
        <p class="w-11/12 mx-auto mt-2 mb-6">{{$property->description}}</p>
    </div>
</x-layout>