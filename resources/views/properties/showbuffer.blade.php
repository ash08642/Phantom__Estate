<x-layout>
    <div class="mx-auto w-11/12 my-8 flex flex-col sm:flex-row">
        <div class="basis-2/3">
            <div>
                <?php if($property->photo) : ?>
                    <img class="rounded-2xl" src="{{asset('storage/' . $property->photo)}}" alt="">
                <?php else : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                <?php endif; ?>
                <div>
                    <div>
                        <span>{{$property->street}}</span>
                        <span> ,{{$property->city}}</span>
                        <span> ,{{$property->plz}}</span>
                    </div>
                    <div>
                        <span>{{$property->state}}</span>
                        <span> ,{{$property->country}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-primary-950 text-primary-100 basis-1/3 sm:ml-4 rounded shadow-2xl">
            <div class="flex flex-row sm:flex-col rounded mb-2">
                <h3 class="text-xl pl-4 pt-2">
                    For <?php if($property->purchasetype === "Rent"){
                            echo " Rent";
                        } else{
                            echo " Purchase";
                        } ?>
                </h3>
                <div>
                    <span class="text-2xl">${{number_format($property->price)}}</span>
                    <span><?php if($property->purchasetype === "Rent"){
                            echo "/month";
                        } ?>
                    </span>
                </div>
                <div class="flex flex-row mt-2 space-x-2">
                    <svg stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-secondary-100" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V3M14.4286 10L12.8153 8.26266C12.408 7.82396 12.2043 7.6046 11.9659 7.52324C11.7565 7.45174 11.5292 7.45174 11.3198 7.52324C11.0814 7.6046 10.8778 7.82396 10.4704 8.26266L7.42753 11.5396C7.26951 11.7098 7.1905 11.7948 7.13411 11.8925C7.0841 11.979 7.04735 12.0726 7.0251 12.1701C7 12.28 7 12.3961 7 12.6283V15.4C7 15.9601 7 16.2401 7.10899 16.454C7.20487 16.6422 7.35785 16.7951 7.54601 16.891C7.75992 17 8.03995 17 8.6 17H18.4C18.9601 17 19.2401 17 19.454 16.891C19.6422 16.7951 19.7951 16.6422 19.891 16.454C20 16.2401 20 15.9601 20 15.4V12.6283C20 12.3961 20 12.28 19.9749 12.1701C19.9526 12.0726 19.9159 11.979 19.8659 11.8925C19.8095 11.7948 19.7305 11.7098 19.5725 11.5396L18.1429 10C17.9623 9.80555 17.872 9.70833 17.7812 9.6458C17.4397 9.41088 16.9888 9.41088 16.6474 9.6458C16.5566 9.70833 16.4663 9.80555 16.2857 10C16.1052 10.1944 16.0149 10.2917 15.924 10.3542C15.5826 10.5891 15.1317 10.5891 14.7903 10.3542C14.6994 10.2917 14.6091 10.1944 14.4286 10Z" stroke="#d0fbe7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="text-2xl">{{number_format($property->size)}}<span class="text-base"> sqft</span></span>
                </div>
                <div class="flex flex-row mt-2 space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-secondary-100">
                        <path d="M0.75 8.25L12 1L23.2226 8.23233" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.25 18.75H21.75V23.25H2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.25 18.75V14.25H5.25C6.04565 14.25 6.80871 14.5661 7.37132 15.1287C7.93393 15.6913 8.25 16.4544 8.25 17.25V18.75" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 18.75L10.006 16.738C10.3797 15.9904 10.9542 15.3617 11.6651 14.9222C12.376 14.4828 13.1952 14.25 14.031 14.25H18.75C19.5456 14.25 20.3087 14.5661 20.8713 15.1287C21.4339 15.6913 21.75 16.4544 21.75 17.25V18.75" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.25 23.25V12.75" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="text-2xl">{{$property->bedrooms}}<span class="text-base"> Beds</span></span>
                </div>
                <div class="flex flex-row mt-2 space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#d0fbe7" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-secondary-100" viewBox="0 0 294.039 294.039">
                    <path d="M284.039,128.456H37.128V91.735c0-6.508,5.293-11.802,11.799-11.802h42.04c6.505,0,11.798,5.294,11.798,11.802
                        c0,5.522,4.478,10,10,10c5.522,0,10-4.478,10-10c0-17.535-14.265-31.802-31.798-31.802l-43.546,0.019
                        c8.135-9.957,18.172-15.199,18.463-15.349c4.92-2.479,6.909-8.473,4.444-13.402c-2.47-4.941-8.481-6.943-13.416-4.473
                        c-1.625,0.813-39.784,20.352-39.784,60.335v41.393H10c-5.523,0-10,4.396-10,9.919v34.342c0,36.005,27.898,66.425,65.81,75.651H10
                        c-5.523,0-10,4.477-10,10c0,5.522,4.477,10,10,10h274.039c5.522,0,10-4.478,10-10c0-5.522-4.478-10-10-10H228.23
                        c37.911-9.227,65.809-39.646,65.809-75.651v-34.342c0-0.006,0-0.011,0-0.017C294.03,132.844,289.557,128.456,284.039,128.456z
                        M274.039,172.717c0,32.27-31.37,58.523-69.929,58.523H89.929C51.37,231.241,20,204.987,20,172.717v-24.261h254.039V172.717z"/>
                    </svg>
                    <span class="text-2xl">{{$property->bathrooms}}<span class="text-base"> Baths</span></span>
                </div>
            </div>
            <div class="pl-4 pt-2 border-t-2 border-secondary-950">
                <h3 class="text-xl">Contact Agent</h3>
                <div class="flex flex-row sm:flex-col justify-between px-4">
                    <div class="flex flex-row mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        <span class="ml-2">{{$property->agentfirstname}} {{$property->agentlastname}}</span>
                    </div>
                    <div class="flex flex-row mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <span class="ml-2">{{$property->agentemail}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-8 mx-auto flex flex-col space-y-4 w-11/12">
        <h3>
            {{$property->title}}
        </h3>
        <p>
            {{$property->description}}
        </p>
    </div>
    <div class="mx-auto w-11/12 bg-primary-100 ">
        <h3>
            Agent Contact Info
        </h3>
        <div class="flex flex-col no-wrap sm:flex-row">
            <div class="grow">
                <h4>
                    Name :
                </h4>
                <span>
                    {{$property->agentfirstname}} {{$property->agentlastname}}
                </span>
            </div>
            <div class="grow">
                <h4>
                    Email :
                </h4>
                <span>
                    {{$property->agentemail}}
                </span>
            </div>
        </div>
    </div>     
</x-layout>