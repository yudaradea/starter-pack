<nav class="flex items-center justify-between w-ful" aria-label="Global">
    <ul class="flex items-center gap-4 icon-nav">
        <li class="relative xl:hidden">
            <a
                class="text-xl cursor-pointer icon-hover text-heading"
                id="headerCollapse"
                data-hs-overlay="#application-sidebar-brand"
                aria-controls="application-sidebar-brand"
                aria-label="Toggle navigation"
                href="javascript:void(0)"
            >
                <i class="relative ti ti-menu-2 z-1"></i>
            </a>
        </li>
    </ul>

    <div class="flex items-center gap-2">
        {{--
            <div class="font-medium">
            <p>{{ auth()->user()->roles->pluck('name')[0] ?? '' }}</p>
            </div>
        --}}

        <div class="hs-dropdown relative inline-flex [--placement:bottom-right] sm:[--trigger:hover]">
            <a class="relative align-middle rounded-full cursor-pointer hs-dropdown-toggle">
                <img
                    class="object-cover rounded-full w-9 h-9"
                    src="{{ Auth::user()->profile_photo_url }}"
                    alt=""
                    aria-hidden="true"
                />
            </a>
            <div
                class="card hs-dropdown-menu transition-[opacity,margin] rounded-md duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max w-[200px] hidden z-[12]"
                aria-labelledby="hs-dropdown-custom-icon-trigger"
            >
                <div class="p-0 py-2 card-body">
                    <a
                        href="{{ route('profile.show') }}"
                        wire:navigate
                        class="flex gap-2 items-center font-medium px-4 py-1.5 hover:bg-gray-200 text-gray-400"
                    >
                        <i class="text-xl ti ti-user"></i>
                        <p class="text-sm">Settings</p>
                    </a>
                    <hr />
                    <div class="mt-[7px] grid">
                        <form method="post" action="{{ route('logout') }}" x-data>
                            @csrf

                            <button
                                type="submit"
                                class="flex gap-2 items-center font-medium px-4 py-1.5 hover:bg-gray-200 text-gray-400 w-full"
                            >
                                <i class="mt-0.5 text-xl ti ti-logout-2"></i>
                                <p class="text-sm">Log Out</p>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
