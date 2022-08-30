<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title></title>
</head>
<body>
<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Purchase Successful</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Hi there {{  }}</p>
            <div class="p-2 w-full">
                <button
                    class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                    Print Ticket(s)
                </button>
            </div>
        </div>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
                <div class="max-w-md w-full p-4 py-6" v-for="(val,idx)  in GetAfterPurchase">
                    <div class="bg-white shadow-xl rounded-lg overflow-hidden mb-2">
                        <div class="bg-cover bg-center h-16 p-4 flex justify-end items-center"
                             :style="`background-image: url(${GetMovieDetails.moviepath})`">
                            <p
                                class="uppercase tracking-widest text-sm text-white bg-black py-1 px-2 rounded opacity-75 shadow-lg">
                                {{ val.CinemaName }}</p>
                        </div>
                        <div class="p-4 text-gray-700 flex justify-between">
                            <div>
                                <p class="text-3xl text-gray-900"><span
                                        class="text-lg text-gray-500">Seat </span>{{ val.SeatNo }}
                                </p>
                                <p class="text-sm w-56">{{ val.MovieTitle }}<br/>
                                </p>

                            </div>
                            <div class="leading-loose text-sm">
                                <div class="flex items-center">
                                    <i class="mr-2 wi wi-horizon-alt text-yellow-500"></i>
                                    <p><span class="text-xs text-gray-600">{{ val.StartTime }}</span></p>
                                </div>
                                <div class="flex items-center">
                                    <i class="mr-2 wi wi-horizon text-purple-400"></i>
                                    <p><span class="text-xs text-gray-600">{{ val.Endtime }}</span></p>
                                </div>
                                <div class="flex items-center">
                                    <i class="mr-2 wi wi-horizon text-purple-400"></i>
                                    <p><span class="text-xs text-gray-600">{{ val.ticketNumber }}</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-center p-4 border-t border-gray-300 text-gray-600">
                            <div class="flex items-center">
                                <p><span class="text-gray-900 font-bold">{{
                        new Date(GetShowTimeDate).toLocaleDateString('en-US', {
                          weekday: 'long',
                          year: 'numeric',
                          month: 'long',
                          day: 'numeric'
                        })
                      }}</span></p>
                            </div>

                            <div class="flex items-center">
                                <p class="text-xs text-gray-600">Purchased On <span
                                        class="text-xs text-gray-600">{{ val.PurchaseDate }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
</body>
</html>
