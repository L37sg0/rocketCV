<!-- Main navigation container -->
<nav
    class="relative flex w-full flex-nowrap items-center justify-between bg-zinc-50 py-2 shadow-dark-mild dark:bg-neutral-700 lg:flex-wrap lg:justify-start lg:py-4"
    data-twe-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <!-- Hamburger button for mobile view -->
        <button
            class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
            type="button"
            data-twe-collapse-init
            data-twe-target="#navbarSupportedContent15"
            aria-controls="navbarSupportedContent15"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <!-- Hamburger icon -->
            <span
                class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor">
          <path
              fill-rule="evenodd"
              d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
              clip-rule="evenodd"/>
        </svg>
      </span>
        </button>

        <div class="ms-2 md:me-2">
            <a class="text-xl text-black dark:text-white" href="#">RocketCV</a>
        </div>

        <!-- Collapsible navbar container -->
        <div
            class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
            id="navbarSupportedContent15"
            data-twe-collapse-item>
            <!-- Left links -->
            <ul
                class="list-style-none me-auto flex flex-col ps-0 lg:mt-1 lg:flex-row"
                data-twe-navbar-nav-ref>
                <!-- Home link -->
                <li
                    class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2"
                    data-twe-nav-item-ref>
                    <a
                        class="text-black dark:text-white lg:px-2"
                        aria-current="page"
                        href="/"
                        data-twe-nav-link-ref
                    >Home</a
                    >
                </li>
                <!-- Link -->
                <li
                    class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0"
                    data-twe-nav-item-ref>
                    <a
                        class="p-0 text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        href="/cvs"
                        data-twe-nav-link-ref
                    >List CVs</a
                    >
                </li>
                <!-- Link -->
                <li
                    class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0"
                    data-twe-nav-item-ref>
                    <a
                        class="p-0 text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
                        href="/cvs/create"
                        data-twe-nav-link-ref
                    >Create New</a
                    >
                </li>
            </ul>
            <div class="w-[300px] lg:pe-2">
                <div class="relative flex w-full flex-wrap items-stretch">
                    <input
                        type="search"
                        class="relative m-0 -me-0.5 block w-[1px] min-w-0 flex-auto rounded-s border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 py-1 text-base font-normal leading-[1.6] text-surface outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none dark:border-white/10 dark:bg-body-dark dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill"
                        placeholder="Search"
                        aria-label="Search"
                        aria-describedby="button-addon3"/>

                    <!--Search button-->
                    <button
                        class="relative z-[2] rounded-e border-2 border-primary px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:border-primary-accent-300 hover:bg-primary-50/50 hover:text-primary-accent-300 focus:border-primary-600 focus:bg-primary-50/50 focus:text-primary-600 focus:outline-none focus:ring-0 active:border-primary-700 active:text-primary-700 motion-reduce:transition-none dark:text-primary-500 dark:hover:bg-blue-950 dark:focus:bg-blue-950"
                        type="button"
                        id="button-addon3"
                        data-twe-ripple-init>
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
