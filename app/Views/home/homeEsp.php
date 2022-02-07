
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>
      <title>Horizontal nav 1</title>
  </head>
  <body>
    
        <!-- Desktop Screen Size Start -->
        <div class="hidden lg:block relative border-b mb-8 px-8 border-gray-100">
            <div class="2xl:container 2xl:mx-auto flex justify-between items-center w-full">
                <div class="relative w-full py-3 flex justify-start items-center space-x-4">
                    <svg class="cursor-pointer" width="50" height="32" viewBox="0 0 50 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 17.0551C0.0324314 25.2688 6.59422 32 14.6551 32C22.7359 32 29.3097 25.2959 29.3097 17.0551V14.9453C29.3097 11.5521 32.017 8.79118 35.3444 8.79118C38.6722 8.79118 41.3791 11.5521 41.3791 14.9453C41.3791 15.9163 42.1511 16.7037 43.1032 16.7037H48.2758C49.2284 16.7037 50 15.9163 50 14.9453C50 6.70457 43.4261 0 35.3449 0C27.2641 0 20.6898 6.70457 20.6898 14.9453V17.0551C20.6898 20.4489 17.9825 23.2088 14.6556 23.2088C11.3282 23.2088 8.62094 20.4489 8.62094 17.0551C8.62094 16.0842 7.84888 15.2968 6.89675 15.2968H1.72419C0.772061 15.2973 0 16.0842 0 17.0551Z"
                            fill="#1F2937"
                        />
                    </svg>
                    <div class="relative w-64 flex justify-start items-center">
                        <input oninput="showDiv(this)" value="" class="w-full py-3 bg-gray-100 rounded pl-10 focus:outline-none text-sm leading-none text-gray-600 placeholder-gray-600" type="text" placeholder="Search" />
                        <svg class="absolute left-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.66667 11.3333C9.244 11.3333 11.3333 9.244 11.3333 6.66667C11.3333 4.08934 9.244 2 6.66667 2C4.08934 2 2 4.08934 2 6.66667C2 9.244 4.08934 11.3333 6.66667 11.3333Z" stroke="#4B5563" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14 14L10 10" stroke="#4B5563" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <!-- pop up on input -->
                    <div id="popup" class="hidden ease-in-out transition duration-500 bg-white z-20 top-20 left-12 absolute w-64 shadow border rounded border-gray-200 py-3 flex justify-center items-start flex-col">
                        <p class="px-3 text-left w-full text-sm font-medium leading-4 text-gray-800">Products</p>
                        <button class="w-full mt-2 flex p-2 flex justify-start items-center space-x-2 hover:bg-blue-50 rounded">
                            <div>
                                <img src="https://i.ibb.co/BrPztW1/Coinbase-Icon.png" alt="Coinbase-Icon" />
                            </div>
                            <div class="flex justify-start items-start flex-col space-y-1">
                                <p class="text-xs text-left leading-3 text-gray-800">Coinbase</p>
                                <p class="text-xs text-left leading-3 text-gray-600">Trading tool for stoks and funds</p>
                            </div>
                        </button>
                        <button class="w-full mt-2 flex p-2 flex justify-start items-center space-x-2 hover:bg-blue-50 rounded">
                            <div>
                                <img src="https://i.ibb.co/7KJTB5r/CNN-Icon.png" alt="CNN-Icon" />
                            </div>
                            <div class="flex justify-start items-start flex-col space-y-1">
                                <p class="text-xs text-left leading-3 text-gray-800">CNN</p>
                                <p class="text-xs text-left leading-3 text-gray-600">News and communications</p>
                            </div>
                        </button>
                        <div class="px-3 flex justify-start items-start mt-10 flex-col space-y-4">
                            <p class="text-sm text-left font-medium leading-4 text-gray-800">Flows</p>
                            <p class="text-xs text-left leading-3 text-gray-600">Classes</p>
                            <p class="text-xs text-left leading-3 text-gray-600">Curriculum</p>
                            <p class="text-xs text-left leading-3 text-gray-600">Communication</p>
                        </div>
                    </div>
                    <!-- pop up on input -->
                </div>
                <div class="flex justify-center items-center w-full space-x-4">
                    <button class="py-3 h-full text-gray-600 focus:text-blue-700 text-center border-b-2 focus:outline-none focus:border-blue-700 border-transparent">
                        <p class="text-sm focus:outline-none font-medium leading-4 px-4 py-3 hover:bg-blue-50 hover:text-blue-700 rounded">Home Especialista</p>
                    </button>
                    <button class="py-3 h-full text-gray-600 focus:text-blue-700 text-center border-b-2 focus:outline-none focus:border-blue-700 border-transparent">
                        <p class="text-sm focus:outline-none font-medium leading-4 px-4 py-3 hover:bg-blue-50 hover:text-blue-700 rounded">Engage</p>
                    </button>
                    <button class="py-3 h-full text-gray-600 focus:text-blue-700 text-center border-b-2 focus:outline-none focus:border-blue-700 border-transparent">
                        <p class="text-sm focus:outline-none font-medium leading-4 px-4 py-3 hover:bg-blue-50 hover:text-blue-700 rounded">Opportunitues</p>
                    </button>
                    <button class="py-3 h-full text-gray-600 focus:text-blue-700 text-center border-b-2 focus:outline-none focus:border-blue-700 border-transparent">
                        <p class="text-sm focus:outline-none font-medium leading-4 px-4 py-3 hover:bg-blue-50 hover:text-blue-700 rounded">Settings</p>
                    </button>
                </div>
                <div class="relative py-3 flex justify-end items-center w-full space-x-6">
                    <button class="p-3 focus:outline-none rounded text-xs font-medium leading-3 hover:text-blue-700 hover:bg-blue-50 focus:bg-blue-700 focus:text-white text-gray-600">Upgrade Now</button>
                    <button onclick="showDropdown()" class="rounded-full">
                        <img src="https://i.ibb.co/MssyL01/Group-1788.png" alt="avatar" />
                    </button>
                    <div id="dropdown" class="hidden absolute z-20 top-20 w-80 bg-white shadow border rounded border-gray-200 py-4 flex justify-start items-start flex-col">
                        <div class="px-4 flex justify-start items-start space-x-4">
                            <div>
                                <img src="https://i.ibb.co/MssyL01/Group-1788.png" alt="avatar" />
                            </div>
                            <div class="flex justify-start items-start flex-col space-y-2">
                                <p class="text-sm font-medium leading-3 text-gray-700">Mark Spensor</p>
                                <p class="text-xs leading-3 text-gray-600">Markeenspensor@alphasquad.com</p>
                            </div>
                        </div>
                        <button class="mt-4 flex justify-start items-center text-gray-600 hover:bg-blue-50 focus:bg-blue-100 space-x-2 px-4 py-2 focus:outline-none hover:text-blue-700 focus:text-blue-700 rounded w-full">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.99935 6.41667C7.46084 6.41667 7.91196 6.27982 8.29568 6.02343C8.67939 5.76704 8.97846 5.40262 9.15507 4.97626C9.33167 4.5499 9.37788 4.08075 9.28785 3.62812C9.19782 3.1755 8.97559 2.75974 8.64926 2.43342C8.32294 2.1071 7.90718 1.88487 7.45456 1.79484C7.00194 1.7048 6.53278 1.75101 6.10642 1.92762C5.68006 2.10422 5.31564 2.40329 5.05925 2.787C4.80286 3.17072 4.66602 3.62184 4.66602 4.08333C4.66602 4.70217 4.91185 5.29567 5.34943 5.73325C5.78702 6.17084 6.38051 6.41667 6.99935 6.41667Z" fill="currentColor" />
                                <path d="M10.4994 12.2499C10.6541 12.2499 10.8024 12.1885 10.9118 12.0791C11.0212 11.9697 11.0827 11.8213 11.0827 11.6666C11.0827 10.5836 10.6525 9.54501 9.8867 8.77923C9.12093 8.01346 8.08232 7.58325 6.99935 7.58325C5.91638 7.58325 4.87777 8.01346 4.112 8.77923C3.34622 9.54501 2.91602 10.5836 2.91602 11.6666C2.91602 11.8213 2.97747 11.9697 3.08687 12.0791C3.19627 12.1885 3.34464 12.2499 3.49935 12.2499H10.4994Z" fill="currentColor" />
                            </svg>
                            <p class="text-sm leading-3">My Account</p>
                        </button>
                        <button class="mt-2 flex justify-start items-center text-gray-600 hover:bg-blue-50 focus:bg-blue-100 space-x-2 px-4 py-2 focus:outline-none hover:text-blue-700 focus:text-blue-700 rounded w-full">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 7.875C7.48325 7.875 7.875 7.48325 7.875 7C7.875 6.51675 7.48325 6.125 7 6.125C6.51675 6.125 6.125 6.51675 6.125 7C6.125 7.48325 6.51675 7.875 7 7.875Z" fill="currentColor" />
                                <path
                                    d="M12.769 6.02008L12.3082 4.55008C12.2584 4.38019 12.1749 4.22206 12.0628 4.08512C11.9506 3.94818 11.8119 3.83524 11.6552 3.75304C11.4984 3.67083 11.3266 3.62105 11.1502 3.60665C10.9737 3.59226 10.7962 3.61355 10.6282 3.66925L10.4298 3.73341C10.2745 3.78477 10.109 3.79781 9.94748 3.7714C9.78598 3.74499 9.63326 3.67992 9.50234 3.58175L9.43817 3.53508C9.31041 3.4373 9.20743 3.31086 9.13751 3.16597C9.06759 3.02107 9.03271 2.86177 9.03567 2.70091V2.53758C9.03851 2.17126 8.89584 1.81879 8.639 1.55758C8.51684 1.43418 8.3715 1.33613 8.21133 1.26905C8.05116 1.20198 7.87932 1.16722 7.70567 1.16675H6.21817C5.86127 1.17136 5.52065 1.31678 5.27046 1.57134C5.02027 1.8259 4.88077 2.16899 4.88234 2.52591V2.66591C4.88178 2.83524 4.84323 3.00228 4.76953 3.15473C4.69583 3.30717 4.58886 3.44114 4.4565 3.54675L4.38067 3.60508C4.23445 3.71569 4.06343 3.78892 3.88248 3.8184C3.70152 3.84789 3.5161 3.83273 3.34234 3.77425C3.18275 3.71902 3.01361 3.69675 2.84516 3.70878C2.67671 3.72081 2.51246 3.7669 2.36234 3.84425C2.20604 3.92182 2.06737 4.03074 1.95497 4.16421C1.84257 4.29768 1.75885 4.45286 1.709 4.62008L1.23067 6.13675C1.11975 6.4787 1.14819 6.8506 1.30983 7.1717C1.47148 7.4928 1.75326 7.73717 2.094 7.85175H2.18734C2.34452 7.91065 2.4856 8.00579 2.59912 8.12945C2.71263 8.2531 2.79539 8.40178 2.84067 8.56341L2.87567 8.65675C2.9407 8.83532 2.96244 9.02678 2.93912 9.21539C2.9158 9.404 2.84807 9.58439 2.7415 9.74175C2.5258 10.0355 2.43481 10.4026 2.48834 10.7631C2.54187 11.1236 2.73558 11.4483 3.02734 11.6667L4.23484 12.5826C4.46348 12.7488 4.73967 12.8368 5.02234 12.8334C5.09799 12.8408 5.17418 12.8408 5.24984 12.8334C5.4249 12.7995 5.59122 12.7303 5.73865 12.63C5.88608 12.5297 6.01153 12.4005 6.10734 12.2501L6.2415 12.0576C6.33562 11.9226 6.46015 11.8116 6.60505 11.7336C6.74995 11.6555 6.91116 11.6127 7.07567 11.6084C7.24808 11.6042 7.41875 11.6437 7.57176 11.7232C7.72477 11.8028 7.85513 11.9198 7.95067 12.0634L8.02067 12.1626C8.12013 12.3106 8.24883 12.4367 8.39886 12.5331C8.54888 12.6295 8.71706 12.6942 8.89302 12.7231C9.06898 12.7521 9.249 12.7447 9.42201 12.7015C9.59502 12.6583 9.75735 12.5801 9.899 12.4717L11.0832 11.5851C11.3632 11.3676 11.5493 11.0513 11.6036 10.701C11.6578 10.3506 11.576 9.99284 11.3748 9.70091L11.2232 9.47925C11.132 9.33833 11.0722 9.17939 11.0481 9.01328C11.0239 8.84717 11.0359 8.67781 11.0832 8.51675C11.1314 8.34434 11.2208 8.18626 11.3438 8.05616C11.4668 7.92607 11.6196 7.82788 11.789 7.77008L11.9057 7.72925C12.2433 7.61211 12.5221 7.3683 12.6832 7.04935C12.8443 6.7304 12.8751 6.36131 12.769 6.02008ZM6.99984 9.04175C6.59603 9.04175 6.2013 8.92201 5.86555 8.69767C5.5298 8.47332 5.26811 8.15446 5.11358 7.78139C4.95905 7.40833 4.91862 6.99782 4.9974 6.60177C5.07618 6.20573 5.27063 5.84194 5.55616 5.55641C5.84169 5.27087 6.20548 5.07642 6.60153 4.99764C6.99757 4.91887 7.40808 4.9593 7.78115 5.11383C8.15421 5.26836 8.47308 5.53004 8.69742 5.86579C8.92176 6.20154 9.0415 6.59628 9.0415 7.00008C9.0415 7.54156 8.8264 8.06087 8.44351 8.44376C8.06063 8.82664 7.54132 9.04175 6.99984 9.04175Z"
                                    fill="currentColor"
                                />
                            </svg>
                            <p class="text-sm leading-3">Settings</p>
                        </button>
                        <button class="px-4 mt-8 text-sm leading-3 text-gray-600">Sign Out</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Desktop Screen Size End -->

        <!-- Mobile and Ipad Screen size start -->
        <div class="lg:hidden h-full">
            <div class="py-4 px-4 md:px-6 w-full flex justify-between items-center bg-white border-b border-gray-100">
                <div id="searchItems" class="w-full flex justify-between items-center">
                    <button class="">
                        <svg width="50" height="32" viewBox="0 0 50 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 17.0551C0.0324314 25.2688 6.59422 32 14.6551 32C22.7359 32 29.3097 25.2959 29.3097 17.0551V14.9453C29.3097 11.5521 32.017 8.79118 35.3444 8.79118C38.6722 8.79118 41.3791 11.5521 41.3791 14.9453C41.3791 15.9163 42.1511 16.7037 43.1032 16.7037H48.2758C49.2284 16.7037 50 15.9163 50 14.9453C50 6.70457 43.4261 0 35.3449 0C27.2641 0 20.6898 6.70457 20.6898 14.9453V17.0551C20.6898 20.4489 17.9825 23.2088 14.6556 23.2088C11.3282 23.2088 8.62094 20.4489 8.62094 17.0551C8.62094 16.0842 7.84888 15.2968 6.89675 15.2968H1.72419C0.772061 15.2973 0 16.0842 0 17.0551Z"
                                fill="#1F2937"
                            />
                        </svg>
                    </button>
                    <div class="flex jusitfy-end items-center space-x-10">
                        <div id="navSearchandAvatar" class="flex jusitfy-end items-center space-x-10">
                            <button onclick="show2('searchItems')" aria-label="search">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 17C13.866 17 17 13.866 17 10C17 6.13401 13.866 3 10 3C6.13401 3 3 6.13401 3 10C3 13.866 6.13401 17 10 17Z" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M21 21L15 15" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div class="relative">
                                <button onclick="show2('dropdown2')" class="w-8">
                                    <img class="w-8" src="https://i.ibb.co/MssyL01/Group-1788.png" alt="avatar" />
                                </button>
                                <div id="dropdown2" class="hidden absolute z-20 top-16 -right-16 w-80 sm:w-96 bg-white shadow border rounded border-gray-200 py-4 flex justify-start items-start flex-col">
                                    <div class="px-4 flex justify-start items-start space-x-4">
                                        <div>
                                            <img src="https://i.ibb.co/MssyL01/Group-1788.png" alt="avatar" />
                                        </div>
                                        <div class="flex justify-start items-start flex-col space-y-2">
                                            <p class="text-sm font-medium leading-3 text-gray-700">Mark Spensor</p>
                                            <p class="text-xs leading-3 text-gray-600">Markeenspensor@alphasquad.com</p>
                                        </div>
                                    </div>
                                    <button class="mt-4 flex justify-start items-center text-gray-600 hover:bg-blue-50 focus:bg-blue-100 space-x-2 px-4 py-2 focus:outline-none hover:text-blue-700 focus:text-blue-700 w-full">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.99935 6.41667C7.46084 6.41667 7.91196 6.27982 8.29568 6.02343C8.67939 5.76704 8.97846 5.40262 9.15507 4.97626C9.33167 4.5499 9.37788 4.08075 9.28785 3.62812C9.19782 3.1755 8.97559 2.75974 8.64926 2.43342C8.32294 2.1071 7.90718 1.88487 7.45456 1.79484C7.00194 1.7048 6.53278 1.75101 6.10642 1.92762C5.68006 2.10422 5.31564 2.40329 5.05925 2.787C4.80286 3.17072 4.66602 3.62184 4.66602 4.08333C4.66602 4.70217 4.91185 5.29567 5.34943 5.73325C5.78702 6.17084 6.38051 6.41667 6.99935 6.41667Z" fill="currentColor" />
                                            <path d="M10.4994 12.2499C10.6541 12.2499 10.8024 12.1885 10.9118 12.0791C11.0212 11.9697 11.0827 11.8213 11.0827 11.6666C11.0827 10.5836 10.6525 9.54501 9.8867 8.77923C9.12093 8.01346 8.08232 7.58325 6.99935 7.58325C5.91638 7.58325 4.87777 8.01346 4.112 8.77923C3.34622 9.54501 2.91602 10.5836 2.91602 11.6666C2.91602 11.8213 2.97747 11.9697 3.08687 12.0791C3.19627 12.1885 3.34464 12.2499 3.49935 12.2499H10.4994Z" fill="currentColor" />
                                        </svg>
                                        <p class="text-sm leading-3">My Account</p>
                                    </button>
                                    <button class="mt-2 flex justify-start items-center text-gray-600 hover:bg-blue-50 focus:bg-blue-100 space-x-2 px-4 py-2 focus:outline-none hover:text-blue-700 focus:text-blue-700 w-full">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 7.875C7.48325 7.875 7.875 7.48325 7.875 7C7.875 6.51675 7.48325 6.125 7 6.125C6.51675 6.125 6.125 6.51675 6.125 7C6.125 7.48325 6.51675 7.875 7 7.875Z" fill="currentColor" />
                                            <path
                                                d="M12.769 6.02008L12.3082 4.55008C12.2584 4.38019 12.1749 4.22206 12.0628 4.08512C11.9506 3.94818 11.8119 3.83524 11.6552 3.75304C11.4984 3.67083 11.3266 3.62105 11.1502 3.60665C10.9737 3.59226 10.7962 3.61355 10.6282 3.66925L10.4298 3.73341C10.2745 3.78477 10.109 3.79781 9.94748 3.7714C9.78598 3.74499 9.63326 3.67992 9.50234 3.58175L9.43817 3.53508C9.31041 3.4373 9.20743 3.31086 9.13751 3.16597C9.06759 3.02107 9.03271 2.86177 9.03567 2.70091V2.53758C9.03851 2.17126 8.89584 1.81879 8.639 1.55758C8.51684 1.43418 8.3715 1.33613 8.21133 1.26905C8.05116 1.20198 7.87932 1.16722 7.70567 1.16675H6.21817C5.86127 1.17136 5.52065 1.31678 5.27046 1.57134C5.02027 1.8259 4.88077 2.16899 4.88234 2.52591V2.66591C4.88178 2.83524 4.84323 3.00228 4.76953 3.15473C4.69583 3.30717 4.58886 3.44114 4.4565 3.54675L4.38067 3.60508C4.23445 3.71569 4.06343 3.78892 3.88248 3.8184C3.70152 3.84789 3.5161 3.83273 3.34234 3.77425C3.18275 3.71902 3.01361 3.69675 2.84516 3.70878C2.67671 3.72081 2.51246 3.7669 2.36234 3.84425C2.20604 3.92182 2.06737 4.03074 1.95497 4.16421C1.84257 4.29768 1.75885 4.45286 1.709 4.62008L1.23067 6.13675C1.11975 6.4787 1.14819 6.8506 1.30983 7.1717C1.47148 7.4928 1.75326 7.73717 2.094 7.85175H2.18734C2.34452 7.91065 2.4856 8.00579 2.59912 8.12945C2.71263 8.2531 2.79539 8.40178 2.84067 8.56341L2.87567 8.65675C2.9407 8.83532 2.96244 9.02678 2.93912 9.21539C2.9158 9.404 2.84807 9.58439 2.7415 9.74175C2.5258 10.0355 2.43481 10.4026 2.48834 10.7631C2.54187 11.1236 2.73558 11.4483 3.02734 11.6667L4.23484 12.5826C4.46348 12.7488 4.73967 12.8368 5.02234 12.8334C5.09799 12.8408 5.17418 12.8408 5.24984 12.8334C5.4249 12.7995 5.59122 12.7303 5.73865 12.63C5.88608 12.5297 6.01153 12.4005 6.10734 12.2501L6.2415 12.0576C6.33562 11.9226 6.46015 11.8116 6.60505 11.7336C6.74995 11.6555 6.91116 11.6127 7.07567 11.6084C7.24808 11.6042 7.41875 11.6437 7.57176 11.7232C7.72477 11.8028 7.85513 11.9198 7.95067 12.0634L8.02067 12.1626C8.12013 12.3106 8.24883 12.4367 8.39886 12.5331C8.54888 12.6295 8.71706 12.6942 8.89302 12.7231C9.06898 12.7521 9.249 12.7447 9.42201 12.7015C9.59502 12.6583 9.75735 12.5801 9.899 12.4717L11.0832 11.5851C11.3632 11.3676 11.5493 11.0513 11.6036 10.701C11.6578 10.3506 11.576 9.99284 11.3748 9.70091L11.2232 9.47925C11.132 9.33833 11.0722 9.17939 11.0481 9.01328C11.0239 8.84717 11.0359 8.67781 11.0832 8.51675C11.1314 8.34434 11.2208 8.18626 11.3438 8.05616C11.4668 7.92607 11.6196 7.82788 11.789 7.77008L11.9057 7.72925C12.2433 7.61211 12.5221 7.3683 12.6832 7.04935C12.8443 6.7304 12.8751 6.36131 12.769 6.02008ZM6.99984 9.04175C6.59603 9.04175 6.2013 8.92201 5.86555 8.69767C5.5298 8.47332 5.26811 8.15446 5.11358 7.78139C4.95905 7.40833 4.91862 6.99782 4.9974 6.60177C5.07618 6.20573 5.27063 5.84194 5.55616 5.55641C5.84169 5.27087 6.20548 5.07642 6.60153 4.99764C6.99757 4.91887 7.40808 4.9593 7.78115 5.11383C8.15421 5.26836 8.47308 5.53004 8.69742 5.86579C8.92176 6.20154 9.0415 6.59628 9.0415 7.00008C9.0415 7.54156 8.8264 8.06087 8.44351 8.44376C8.06063 8.82664 7.54132 9.04175 6.99984 9.04175Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                        <p class="text-sm leading-3">Settings</p>
                                    </button>
                                    <button class="px-4 mt-8 text-sm leading-3 text-gray-600">Sign Out</button>
                                </div>
                            </div>
                        </div>
                        <button onclick="show('nav')" aria-label="toggler">
                            <svg id="navClose" class="" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.75 7.5H20.25" stroke="#4B5563" stroke-miterlimit="10" stroke-linecap="round" />
                                <path d="M3.75 12H20.25" stroke="#4B5563" stroke-miterlimit="10" stroke-linecap="round" />
                                <path d="M3.75 16.5H20.25" stroke="#4B5563" stroke-miterlimit="10" stroke-linecap="round" />
                            </svg>
                            <svg id="navOpen" class="hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 6L6 18" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6 6L18 18" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div id="searchItemsSecond" class="hidden w-full flex justify-between items-center">
                    <div class="relative w-full flex justify-start items-center mr-4 md:mr-16">
                        <input oninput="showDiv2(this)" value="" class="w-full py-3 bg-gray-100 rounded pl-10 focus:outline-none text-sm leading-none text-gray-600 placeholder-gray-600" type="text" placeholder="Search" />
                        <svg class="absolute left-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 17C13.866 17 17 13.866 17 10C17 6.13401 13.866 3 10 3C6.13401 3 3 6.13401 3 10C3 13.866 6.13401 17 10 17Z" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21 21L15 15" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <!-- pop up on input -->
                        <div id="popup2" class="hidden ease-in-out transition duration-500 bg-white z-20 top-20 absolute w-full shadow border rounded border-gray-200 py-3 flex justify-center items-start flex-col">
                            <p class="px-3 text-left w-full text-sm font-medium leading-4 text-gray-800">Products</p>
                            <button class="mt-2 flex py-2 px-3 w-full flex justify-start items-center space-x-2 hover:bg-blue-50 rounded">
                                <div>
                                    <img src="https://i.ibb.co/BrPztW1/Coinbase-Icon.png" alt="Coinbase-Icon" />
                                </div>
                                <div class="flex justify-start items-start flex-col space-y-1">
                                    <p class="text-xs text-left leading-3 text-gray-800">Coinbase</p>
                                    <p class="text-xs text-left leading-3 text-gray-600">Trading tool for stoks and funds</p>
                                </div>
                            </button>
                            <button class="mt-2 flex py-2 px-3 w-full flex justify-start items-center space-x-2 hover:bg-blue-50 rounded">
                                <div>
                                    <img src="https://i.ibb.co/7KJTB5r/CNN-Icon.png" alt="CNN-Icon" />
                                </div>
                                <div class="flex justify-start items-start flex-col space-y-1">
                                    <p class="text-xs text-left leading-3 text-gray-800">CNN</p>
                                    <p class="text-xs text-left leading-3 text-gray-600">News and communications</p>
                                </div>
                            </button>
                            <div class="px-3 flex justify-start items-start mt-8 flex-col space-y-4">
                                <p class="text-base text-left font-medium leading-4 text-gray-800">Flows</p>
                                <p class="text-base text-left leading-3 text-gray-600">Classes</p>
                                <p class="text-base text-left leading-3 text-gray-600">Curriculum</p>
                                <p class="text-base text-left leading-3 text-gray-600">Communication</p>
                            </div>
                        </div>
                        <!-- pop up on input -->
                    </div>

                    <button onclick="show2('searchItems')" aria-label="toggler">
                        <svg id="navOpen" class="" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6L6 18" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6 6L18 18" stroke="#4B5563" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="nav" class="-translate-x-full transform ease-in-out transition duration-500 w-full h-full bg-gray-600 bg-opacity-80">
                <div class="w-full sm:w-64 flex-col bg-white h-full flex justify-between items-start px-2 md:px-4 pb-4">
                    <div class="flex flex-col jusitfy-start items-start w-full">
                        <button class="py-2 text-gray-600 focus:text-blue-700 text-left border-b-2 w-full focus:outline-none focus:border-blue-700 border-transparent">
                            <p class="text-sm focus:outline-none font-medium leading-4 w-full px-2 md:px-4 py-3 hover:bg-blue-50 hover:text-blue-700 rounded">Home</p>
                        </button>
                        <button class="py-2 text-gray-600 focus:text-blue-700 text-left border-b-2 w-full focus:outline-none focus:border-blue-700 border-transparent">
                            <p class="text-sm focus:outline-none font-medium leading-4 w-full px-2 md:px-4 py-3 hover:bg-blue-50 hover:text-blue-700 rounded">Engage</p>
                        </button>
                        <button class="py-2 text-gray-600 focus:text-blue-700 text-left border-b-2 w-full focus:outline-none focus:border-blue-700 border-transparent">
                            <p class="text-sm focus:outline-none font-medium leading-4 w-full px-2 md:px-4 py-3 hover:bg-blue-50 hover:text-blue-700 rounded">Opportunitues</p>
                        </button>
                        <button class="py-2 text-gray-600 focus:text-blue-700 text-left border-b-2 w-full focus:outline-none focus:border-blue-700 border-transparent">
                            <p class="text-sm focus:outline-none font-medium leading-4 w-full px-2 md:px-4 py-3 hover:bg-blue-50 hover:text-blue-700 rounded">Settings</p>
                        </button>
                    </div>
                    <div class="mt-96 w-full flex justify-end">
                        <button class="p-3 focus:outline-none rounded text-xs font-medium leading-3 w-full text-blue-700 bg-blue-50 focus:bg-blue-700 focus:text-white text-gray-600">Upgrade Now</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile and Ipad Screen size end -->

        <!--  -->
        <script>
            let popup = document.getElementById("popup");
            const showDiv = (flag) => {
                if (flag === false) {
                    popup.classList.add("hidden");
                }
                if (flag.value.length >= 1) {
                    popup.classList.remove("hidden");
                } else if (flag.value.length >= 0) {
                    popup.classList.add("hidden");
                }
            };

            let popup2 = document.getElementById("popup2");
            const showDiv2 = (flag) => {
                if (flag.value.length >= 1) {
                    popup2.classList.remove("hidden");
                } else if (flag.value.length >= 0) {
                    popup2.classList.add("hidden");
                }
            };

            function showDropdown() {
                var dropdown = document.getElementById("dropdown");
                dropdown.classList.toggle("hidden");
            }

            const show = (id) => {
                document.getElementById(id).classList.toggle("-translate-x-full");
                document.getElementById(id + "Open").classList.toggle("hidden");
                document.getElementById(id + "Close").classList.toggle("hidden");
                document.getElementById(id + "SearchandAvatar").classList.toggle("hidden");
            };

            const show2 = (id) => {
                document.getElementById(id).classList.toggle("hidden");
                document.getElementById(id + "Second").classList.toggle("hidden");
            };
        </script>
    
  </body>
</html>