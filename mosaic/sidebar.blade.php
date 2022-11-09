<!-- SIDEBAR PANEL -->
<!-- Sidebar backdrop (mobile only) -->
<div
    class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
    :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'"
    aria-hidden="true"
    x-cloak
></div>

<!-- Sidebar -->
<div
    id="sidebar"
    class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out"
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'"
    @click.outside="sidebarOpen = false"
    @keydown.escape.window="sidebarOpen = false"
    x-cloak="lg">

    <!-- SIDEBAR HEADER -->
    <div class="flex justify-between mb-10 pr-3 sm:px-2">
        <!-- CLOSE BUTTON -->
        <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
            <span class="sr-only">Close sidebar</span>
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
            </svg>
        </button>
        <!-- LOGO -->
        <div class="block">
            <img src={{ asset('img/GRAY-horizontal-logo-280x140-white.png') }} alt="">
        </div>
    </div>

    <!-- SIDEBAR PANEL LINKS -->
    <div class="space-y-8">
        <!-- PAGES -->
        <div>
            <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6" aria-hidden="true">•••</span>
                <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">Pages</span>
            </h3>
            <ul class="mt-3">
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" x-data="{ open: false }">
                    <a class="block text-slate-200 hover:text-white truncate transition duration-150" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4" />
                                    <line x1="14.5" y1="5.5" x2="18.5" y2="9.5" />
                                    <polyline points="12 8 7 3 3 7 8 12" />
                                    <line x1="7" y1="8" x2="5.5" y2="9.5" />
                                    <polyline points="16 12 21 17 17 21 12 16" />
                                    <line x1="16" y1="17" x2="14.5" y2="18.5" />
                                </svg>
                                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Admin Tools</span>
                            </div>
                            <!-- ICON -->
                            <div class="flex shrink-0 ml-2 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">
                                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                </svg>
                            </div>
                        </div>
                    </a>
                    <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                        <ul class="pl-9 mt-1 hidden" :class="open ? '!block' : 'hidden'">
                            <li title="View Article" class="mb-1 last:mb-0">
                                <a title="View Article" target="_blank" class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate" href="{{ route('telescope')}}">
                                    <span title="Laravel Telescope" class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Laravel Telescope</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- EXPAND/COLLAPSE BUTTON -->
    <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
        <div class="px-3 py-2">
            <button @click="sidebarExpanded = !sidebarExpanded">
                <span class="sr-only">Expand / collapse sidebar</span>
                <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                    <path class="text-slate-400" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
                    <path class="text-slate-600" d="M3 23H1V1h2z" />
                </svg>
            </button>
        </div>
    </div>
</div>
