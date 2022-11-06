<script setup></script>

<template>
    <section id="services" class ="section bg-light-secondary dark:bg-dark-secondary">
        <div class="container mx-auto"  v-motion
    :initial="{
      opacity: 0,
      y: 100,
    }"
    :visible="{
      opacity: 1,
      y: 0,
    }">
            <div class ="flex flex-col items-center text-center">
                <h2 class ="section-title">What I do for Clients</h2>
                <p class ="subtitle">I build website for clients using laravel and wordpress</p>
            </div>
            <!----grid section-->
            <div class="grid lg:grid-cols-4 gap-8">
                <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 
                    text-[28px]">
                    <!--------svg section ------>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125z" />
                  </svg>

                    </div>

                    <h4 class="text-xl font-medium mb-2">Web Design</h4>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut "</p>
                </div>


                  <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 
                    text-[28px]">
                    <!--------svg section ------>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>

                    </div>

                    <h4 class="text-xl font-medium mb-2">Web development</h4>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut "</p>
                </div>


                  <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 
                    text-[28px]">
                    <!--------svg section ------>
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                    </svg>

                    </div>

                    <h4 class="text-xl font-medium mb-2">Infrastructual Support</h4>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut "</p>
                </div>

                
                  <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 h-12 flex justify-center items-center mb-24 
                    text-[28px]">
                    <!--------svg section ------>
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5" />
                    </svg>

                    </div>

                    <h4 class="text-xl font-medium mb-2">Hardware Repair</h4>
                    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut "</p>
                </div>
            </div>
        </div>
    </section>


</template>