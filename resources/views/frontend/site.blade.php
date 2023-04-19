@extends('frontend.layouts.index')
@section('navigation')
    <!-- MOBILE MENU -->
    <div class="foliox_tm_mobile_menu w-full h-auto fixed top-0 left-0 hidden z-[10]">
        <div class="mobile_menu_inner w-full h-auto clear-both float-left bg-[#1e1345] border-solid border-[rgba(255,255,255,.1)] border py-[10px] px-[20px]">
            <div class="mobile_in w-full h-auto clear-both float-left flex items-center justify-between">
                <div class="logo">
                    <a href="#">
                        <img class="max-w-[120px] max-h-[70px]" src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="" />
                    </a>
                </div>
                <div class="trigger leading-[0]">
                    <div class="hamburger hamburger--slider">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown w-full h-auto clear-both float-left bg-[#1e1345] hidden">
            <div class="dropdown_inner w-full h-auto clear-both float-left py-[25px] px-[40px]">
                <ul class="anchor_nav">
                    <li class="current float-left w-full">
                        <a class="text-white inline-block p-0 font-medium" href="#home">Home</a>
                    </li>
                    <li class="float-left w-full">
                        <a class="text-white inline-block p-0 font-medium" href="#about">About</a>
                    </li>
                    <li class="float-left w-full">
                        <a class="text-white inline-block p-0 font-medium" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="float-left w-full">
                        <a class="text-white inline-block p-0 font-medium" href="#service">Service</a>
                    </li>
                    <li class="float-left w-full">
                        <a class="text-white inline-block p-0 font-medium" href="#blog">Blog</a>
                    </li>
                    <li class="float-left w-full">
                        <a class="text-white inline-block p-0 font-medium" href="#contact">Contact</a>
                    </li>
                    <li>
                        @auth
                            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /MOBILE MENU -->

    <!-- HEADER -->
    <div class="foliox_tm_header fixed top-0 left-0 right-0 z-[10] py-[45px] px-0 transition-all duration-300">
        <div class="container">
            <div class="inner w-full flex items-center justify-between">
                <div class="logo">
                    <a class="anchor" href="#home">
                        <img class="max-w-[200px] max-h-[80px] transition-all duration-300" src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="logo" />
                    </a>
                </div>
                <div class="details flex items-center">
                    <div class="menu">
                        <ul class="anchor_nav flex items-center">
                            <li class="current mr-[40px]">
                                <a class="text-white font-poppins transition-all duration-300 hover:text-extra-color" href="#home">Home</a>
                            </li>
                            <li class="mr-[40px]">
                                <a class="text-white font-poppins transition-all duration-300 hover:text-extra-color" href="#about">About</a>
                            </li>
                            <li class="mr-[40px]">
                                <a class="text-white font-poppins transition-all duration-300 hover:text-extra-color" href="#service">Service</a>
                            </li>
                            <li class="mr-[40px]">
                                <a class="text-white font-poppins transition-all duration-300 hover:text-extra-color" href="#portfolio">Portfolio</a>
                            </li>
                            <li class="mr-[40px]">
                                <a class="text-white font-poppins transition-all duration-300 hover:text-extra-color" href="#blog">Blog</a>
                            </li>
                            <li>
                                <a class="text-white font-poppins transition-all duration-300 hover:text-extra-color" href="#contact">Contact</a>
                            </li>
                            <li>
                                @auth
                                    <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                @endauth
                            </li>
                        </ul>
                    </div>
                    <div class="social relative ml-[60px]">
                        <ul class="flex items-center">
                            <li class="mr-[12px]">
                                <a class="text-white transition-all duration-300 hover:text-extra-color" href="#">
                                    <i class="icon-facebook-1"></i>
                                </a>
                            </li>
                            <li class="mr-[12px]">
                                <a class="text-white transition-all duration-300 hover:text-extra-color" href="#">
                                    <i class="icon-twitter-1"></i>
                                </a>
                            </li>
                            <li class="mr-[12px]">
                                <a class="text-white transition-all duration-300 hover:text-extra-color" href="#">
                                    <i class="icon-behance-2"></i>
                                </a>
                            </li>
                            <li>
                                <a class="text-white transition-all duration-300 hover:text-extra-color" href="#">
                                    <i class="icon-instagram-1"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /HEADER -->
@endsection
@section('content')
{{-- ! Hero Section ! --}}
    <section class="hero">
        <div class="foliox_tm_section w-full h-auto clear-both float-left" id="home">
            <div class="foliox_tm_hero w-full h-[100vh] float-left relative">
                <div class="container">
                    <div class="content h-[100vh] flex items-center">
                        <div class="left w-1/2">
                            <h3 class="name text-[120px] leading-[1.1] mb-[25px]">
                                James
                                <span class="text-extra-color">Smith</span>
                            </h3>
                            <p class="job text-white text-[23px] font-medium font-poppins mb-[50px]">
                                Web Designer based
                                In New York
                            </p>
                            <div class="foliox_tm_button">
                                <a class="anchor" href="#contact">
                                    <span>Get Connected</span>
                                </a>
                            </div>
                        </div>
                        <div class="right w-1/2 pl-[80px]">
                            <img class="tilt-effect max-w-[600px] max-h-[600px]" src="{{asset('frontend/assets/img/hero/avatar.png')}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- ! Features Section ! --}}
    <section class="features">
        <div class="foliox_tm_section w-full h-auto clear-both float-left">
            <div class="foliox_tm_features w-full h-auto clear-both float-left mb-[113px]">
                <div class="container">
                    <div class="list w-full h-auto clear-both float-left relative">
                        <ul class="ml-[-25px] flex flex-wrap">
                            <li class="wow fadeInUp mb-[50px] pl-[25px] w-1/3" data-wow-duration="1s">
                                <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative bg-[#3a2b71] rounded-[10px] p-[60px]">
                                    <img class="svg w-[65px] h-[65px] mb-[30px] text-extra-color" src="{{asset('frontend/assets/img/svg/setting.svg')}}" alt="" />
                                    <h3 class="title text-[24px] mb-[20px]">Deeper Skillset</h3>
                                    <p class="text">Kobita tumi sopno charini hodsye ersest labo met, consectetur addsipi ctetur adipisicing eod tempor</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp mb-[50px] pl-[25px] w-1/3" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div
                                    class="list_inner tilt-effect w-full h-auto clear-both float-left relative bg-[#3a2b71] rounded-[10px] p-[60px]">
                                    <img class="svg w-[65px] h-[65px] mb-[30px] text-extra-color" src="{{asset('frontend/assets/img/svg/case.svg')}}" alt="" />
                                    <h3 class="title text-[24px] mb-[20px]">Creative Work</h3>
                                    <p class="text">Kobita tumi sopno charini hodsye ersest labo met, consectetur addsipi ctetur adipisicing eod tempor</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp mb-[50px] pl-[25px] w-1/3" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div
                                    class="list_inner tilt-effect w-full h-auto clear-both float-left relative bg-[#3a2b71] rounded-[10px] p-[60px]">
                                    <img class="svg w-[65px] h-[65px] mb-[30px] text-extra-color" src="{{asset('frontend/assets/img/svg/diamond.svg')}}" alt="" />
                                    <h3 class="title text-[24px] mb-[20px]">Strong Dedication</h3>
                                    <p class="text">Kobita tumi sopno charini hodsye ersest labo met, consectetur addsipi ctetur adipisicing eod tempor</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- ! About Section ! --}}
    <section class="about">
        <div class="foliox_tm_section w-full h-auto clear-both float-left" id="about">
            <div class="foliox_tm_about w-full h-auto clear-both float-left mb-[245px]">
                <div class="container">
                    <div class="foliox_tm_main_title w-full max-w-[650px] h-auto clear-both my-0 mx-auto text-center">
                        <span class="text-[21px] font-poppins text-extra-color font-medium inline-block mb-[5px]">About Me</span>
                        <h3 class="text-[48px]">A Passionate Developer Who Loves to Code</h3>
                    </div>
                    <div class="wrapper w-full h-auto clear-both flex mt-[75px]">
                        <div class="left w-1/2 relative">
                            <div class="big_image float-right relative">
                                <img class="tilt-effect max-w-425px max-h-[510px]" src="{{asset('frontend/assets/img/about/1.png')}}" alt="" />
                                <div class="small_image absolute z-[1] right-full top-full mt-[-180px] mr-[-100px]">
                                    <div class="in relative">
                                        <img class="relative opacity-0 min-w-[337px] max-w-[337px]" src="{{asset('frontend/assets/img/thumbs/1-1.jpg')}}" alt="" />
                                        <div class="main tilt-effect absolute inset-0 bg-no-repeat bg-cover bg-center rounded-[10px]" style="background-image: url({{asset('frontend/assets/img/about/2.jpg')}})"></div>
                                    </div>
                                </div>
                                <span class="badge w-[120px] h-[120px] inline-block absolute bg-extra-color rounded-[10px] top-[160px] right-full mr-[45px]">
                                    <img class="svg w-[65px] h-[65px] absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%]" src="{{asset('frontend/assets/img/svg/ribbon.svg')}}" alt="" />
                                </span>
                                <div class="experience absolute top-full left-[138px] mt-[35px]">
                                    <div class="inner relative flex items-center pl-[25px]">
                                        <h3 class="text-[72px]">12</h3>
                                        <span class="text-[22px] font-poppins text-white leading-[32px] pl-[20px]">Successful<br />Years</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right w-1/2 pl-[90px] relative top-[30px]">
                            <h3 class="title text-[30px] mb-[35px]">About Me</h3>
                            <p class="text">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur. Excepteur sint occae cat cupidatat non proident, sunt in culpa
                                qui officia dese runt mollit anim id est laborum velit esse cillum dolore eu fugiat.
                            </p>
                            <div class="list w-full clear-both float-left overflow-hidden rounded-[10px] border-solid border-[#625a7d] border-2 mt-[32px] mb-[40px]">
                                <ul class="mt-[-2px] mr-[-10px] mb-[-2px] ml-[-2px] pt-[2px] float-left pl-[2px]">
                                    <li class="m-0 float-left w-1/2 border-solid border-[#625a7d] border-2 relative mt-[-2px] ml-[-2px] overflow-hidden">
                                        <ul class="item py-[25px] px-[35px]">
                                            <li class="mb-[11px]">
                                                <span class="font-poppins text-[16px] font-medium text-white inline-block">Name</span>
                                                <p class="text-[16px]">Alan Walker</p>
                                            </li>
                                            <li class="mb-[11px]">
                                                <span class="font-poppins text-[16px] font-medium text-white inline-block">Email</span>
                                                <p class="text-[16px]">
                                                    <a class="text-main-color" href="#">
                                                        <span class="__cf_email__" data-cfemail="7f171a1313103f191013161007511c1012">[email&#160;protected]</span>
                                                    </a>
                                                </p>
                                            </li>
                                            <li>
                                                <span class="font-poppins text-[16px] font-medium text-white inline-block">Phone</span>
                                                <p class="text-[16px]">+123 456 7890</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="m-0 float-left w-1/2 border-solid border-[#625a7d] border-2 relative mt-[-2px] ml-[-2px] overflow-hidden">
                                        <ul class="item py-[25px] px-[35px]">
                                            <li class="mb-[11px]">
                                                <span class="font-poppins text-[16px] font-medium text-white inline-block">Address</span>
                                                <p class="text-[16px]">20, Bordeshi, Dhaka</p>
                                            </li>
                                            <li class="mb-[11px]">
                                                <span class="font-poppins text-[16px] font-medium text-white inline-block">Degree</span>
                                                <p class="text-[16px]">Master</p>
                                            </li>
                                            <li>
                                                <span class="font-poppins text-[16px] font-medium text-white inline-block">Freelance</span>
                                                <p class="text-[16px]">Available</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="foliox_tm_button">
                                <a href="assets/img/cv/1.jpg" download><span>Download CV</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- ! Count Section ! --}}
    <section class="count">
        <div class="foliox_tm_section w-full h-auto clear-both float-left">
            <div class="foliox_tm_counter w-full h-auto clear-both float-left mb-[115px]">
                <div class="container">
                    <div class="counter_list w-full h-auto clear-both float-left">
                        <ul class="ml-[-25px] flex flex-wrap">
                            <li class="mb-[50px] pl-[25px] w-1/4 ">
                                <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative bg-[#432d92] rounded-[10px] p-[70px] flex items-center justify-center">
                                    <h3 class="text-[60px] text-extra-color">
                                        <span class="tm_counter" data-from="0" data-to="20" data-speed="2000">0</span>
                                    </h3>
                                    <span class="title text-[18px] text-white font-poppins font-medium inline-block pl-[26px]">Digital Products</span>
                                </div>
                            </li>
                            <li class="mb-[50px] pl-[25px] w-1/4 ">
                                <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative bg-[#432d92] rounded-[10px] p-[70px] flex items-center justify-center">
                                    <h3 class="text-[60px] text-extra-color">
                                        <span class="tm_counter" data-from="0" data-to="280" data-speed="2000">0</span>
                                    </h3>
                                    <span class="title text-[18px] text-white font-poppins font-medium inline-block pl-[26px]">Direct Clients</span>
                                </div>
                            </li>
                            <li class="mb-[50px] pl-[25px] w-1/4 ">
                                <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative bg-[#432d92] rounded-[10px] p-[70px] flex items-center justify-center">
                                    <h3 class="text-[60px] text-extra-color">
                                        <span class="tm_counter" data-from="0" data-to="3" data-speed="2000">0</span>K
                                    </h3>
                                    <span class="title text-[18px] text-white font-poppins font-medium inline-block pl-[26px]">Total Projects</span>
                                </div>
                            </li>
                            <li class="mb-[50px] pl-[25px] w-1/4 ">
                                <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative bg-[#432d92] rounded-[10px] p-[70px] flex items-center justify-center">
                                    <h3 class="text-[60px] text-extra-color">
                                        <span class="tm_counter" data-from="0" data-to="9" data-speed="2000">0</span>+
                                    </h3>
                                    <span class="title text-[18px] text-white font-poppins font-medium inline-block pl-[26px]">Awards Win</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- ! Skills ! --}}
    <section class="skills">
        <div class="foliox_tm_section w-full h-auto clear-both float-left">
            <div class="foliox_tm_skills w-full h-auto clear-both float-left mb-[163px]">
                <div class="container">
                    <div class="foliox_tm_main_title w-full max-w-[650px] h-auto clear-both my-0 mx-auto text-center">
                        <span class="text-[21px] font-poppins text-extra-color font-medium inline-block mb-[5px]">Skills</span>
                        <h3 class="text-[48px]">I Work Hard to Improve My Skills Regularly</h3>
                    </div>
                    <div class="list w-full h-auto clear-both flex mt-[47px]">
                        <div class="left w-1/2 pr-[67px]">
                            <div class="dodo_progress wow fadeInUp w-full h-auto clear-both float-left pt-[30px] overflow-hidden" data-wow-duration="1s">
                                <div class="progress_inner" data-value="95">
                                    <span>
                                        <span class="label">HTML</span>
                                        <span class="number">95%</span>
                                    </span>
                                    <div class="background">
                                        <div class="bar">
                                            <div class="bar_in"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress_inner" data-value="75">
                                    <span>
                                        <span class="label">CSS</span>
                                        <span class="number">75%</span>
                                    </span>
                                    <div class="background">
                                        <div class="bar">
                                            <div class="bar_in"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress_inner" data-value="90">
                                    <span>
                                        <span class="label">JavaScript</span>
                                        <span class="number">90%</span>
                                    </span>
                                    <div class="background">
                                        <div class="bar">
                                            <div class="bar_in"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right w-1/2 pl-[67px]">
                            <div class="dodo_progress wow fadeInUp w-full h-auto clear-both float-left pt-[30px] overflow-hidden" data-wow-duration="1s">
                                <div class="progress_inner" data-value="70">
                                    <span>
                                        <span class="label">React</span>
                                        <span class="number">70%</span>
                                    </span>
                                    <div class="background">
                                        <div class="bar">
                                            <div class="bar_in"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress_inner" data-value="80">
                                    <span>
                                        <span class="label">Vue</span>
                                        <span class="number">80%</span>
                                    </span>
                                    <div class="background">
                                        <div class="bar">
                                            <div class="bar_in"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress_inner" data-value="90">
                                    <span>
                                        <span class="label">PHP</span>
                                        <span class="number">90%</span>
                                    </span>
                                    <div class="background">
                                        <div class="bar">
                                            <div class="bar_in"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- ! Resume ! --}}
    
    <div class="foliox_tm_section w-full h-auto clear-both float-left">
        <div class="foliox_tm_resume w-full h-auto clear-both float-left mb-[155px]">
            <div class="container">
                <div class="foliox_tm_main_title w-full max-w-[650px] h-auto clear-both my-0 mx-auto text-center">
                    <span class="text-[21px] font-poppins text-extra-color font-medium inline-block mb-[5px]">Resume</span>
                    <h3 class="text-[48px]">I Worked for Some Big Companies</h3>
                </div>
                <div class="wrapper w-full h-auto flex mt-[65px]">
                    <div class="left w-1/2 pr-[50px]">
                        <div class="title w-full float-left mb-[60px]">
                            <h3 class="text-[36px]">Experience</h3>
                        </div>
                        <div class="resume_list w-full float-left">
                            <ul class="relative float-left">
                                <li class="wow fadeInUp mb-[50px] float-left w-full" data-wow-duration="1s">
                                    <div class="list_inner w-full h-auto clear-both float-left relative pl-[107px]">
                                        <span class="icon w-[72px] h-[72px] inline-block rounded-full bg-extra-color absolute left-0 top-0 z-[1]">
                                            <img class="svg w-[35px] h-[35px] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white" src="assets/img/svg/case-2.svg" alt="" />
                                        </span>
                                        <div class="resume_title w-full float-left mb-[18px]">
                                            <h3 class="text-[24px] mb-[13px]">
                                                UI/UX Designer
                                                <span class="text-[16px] text-[#b4afc6] font-normal inline-block pl-[8px]">(2018 - Present)</span>
                                            </h3>
                                            <span class="company text-[18px] text-white font-poppins font-semibold">Easy Computers</span>
                                        </div>
                                        <p class="text">Kobita tumi sopno charini hoye ersest labo met, consectetur khobor nio na.</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp mb-[50px] float-left w-full" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="list_inner w-full h-auto clear-both float-left relative pl-[107px]">
                                        <span class="icon w-[72px] h-[72px] inline-block rounded-full bg-extra-color absolute left-0 top-0 z-[1]">
                                            <img class="svg w-[35px] h-[35px] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white" src="assets/img/svg/case-2.svg" alt="" />
                                        </span>
                                        <div class="resume_title w-full float-left mb-[18px]">
                                            <h3 class="text-[24px] mb-[13px]">
                                                Web Designer
                                                <span class="text-[16px] text-[#b4afc6] font-normal inline-block pl-[8px]">(2016 - 2018)</span>
                                            </h3>
                                            <span class="company text-[18px] text-white font-poppins font-semibold">Design Hub</span>
                                        </div>
                                        <p class="text">Kobita tumi sopno charini hoye ersest labo met, consectetur khobor nio na.</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp float-left w-full" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <div class="list_inner w-full h-auto clear-both float-left relative pl-[107px]">
                                        <span class="icon w-[72px] h-[72px] inline-block rounded-full bg-extra-color absolute left-0 top-0 z-[1]">
                                            <img class="svg w-[35px] h-[35px] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white" src="assets/img/svg/case-2.svg" alt="" />
                                        </span>
                                        <div class="resume_title w-full float-left mb-[18px]">
                                            <h3 class="text-[24px] mb-[13px]">
                                                Graphic Designer
                                                <span class="text-[16px] text-[#b4afc6] font-normal inline-block pl-[8px]">(2012 - 2016)</span>
                                            </h3>
                                            <span class="company text-[18px] text-white font-poppins font-semibold">Vivaco Studio</span>
                                        </div>
                                        <p class="text">Kobita tumi sopno charini hoye ersest labo met, consectetur khobor nio na.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right w-1/2 pl-[50px]">
                        <div class="title w-full float-left mb-[60px]">
                            <h3 class="text-[36px]">Education</h3>
                        </div>
                        <div class="resume_list w-full float-left">
                            <ul class="relative float-left">
                                <li class="wow fadeInUp mb-[50px] float-left w-full" data-wow-duration="1s">
                                    <div class="list_inner w-full h-auto clear-both float-left relative pl-[107px]">
                                        <span class="icon w-[72px] h-[72px] inline-block rounded-full bg-extra-color absolute left-0 top-0 z-[1]">
                                            <img class="svg w-[35px] h-[35px] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white" src="assets/img/svg/degree.svg" alt="" />
                                        </span>
                                        <div class="resume_title w-full float-left mb-[18px]">
                                            <h3 class="text-[24px] mb-[13px]">
                                                Masters of Science
                                                <span class="text-[16px] text-[#b4afc6] font-normal inline-block pl-[8px]">(2010 - 2012)</span>
                                            </h3>
                                            <span class="company text-[18px] text-white font-poppins font-semibold">Dhaka University</span>
                                        </div>
                                        <p class="text">Kobita tumi sopno charini hoye ersest labo met, consectetur khobor nio na.</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp mb-[50px] float-left w-full" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="list_inner w-full h-auto clear-both float-left relative pl-[107px]">
                                        <span class="icon w-[72px] h-[72px] inline-block rounded-full bg-extra-color absolute left-0 top-0 z-[1]">
                                            <img class="svg w-[35px] h-[35px] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white" src="assets/img/svg/degree.svg" alt="" />
                                        </span>
                                        <div class="resume_title w-full float-left mb-[18px]">
                                            <h3 class="text-[24px] mb-[13px]">
                                                Bacheloor of Science
                                                <span class="text-[16px] text-[#b4afc6] font-normal inline-block pl-[8px]">(2006 - 2010)</span>
                                            </h3>
                                            <span class="company text-[18px] text-white font-poppins font-semibold">Bangla Collage</span>
                                        </div>
                                        <p class="text">Kobita tumi sopno charini hoye ersest labo met, consectetur khobor nio na.</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp float-left w-full" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <div class="list_inner w-full h-auto clear-both float-left relative pl-[107px]">
                                        <span class="icon w-[72px] h-[72px] inline-block rounded-full bg-extra-color absolute left-0 top-0 z-[1]">
                                            <img class="svg w-[35px] h-[35px] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-white" src="assets/img/svg/degree.svg" alt="" />
                                        </span>
                                        <div class="resume_title w-full float-left mb-[18px]">
                                            <h3 class="text-[24px] mb-[13px]">
                                                Secondary School
                                                <span class="text-[16px] text-[#b4afc6] font-normal inline-block pl-[8px]">(2000 - 2006)</span>
                                            </h3>
                                            <span class="company text-[18px] text-white font-poppins font-semibold">Vivaco Studio</span>
                                        </div>
                                        <p class="text">Kobita tumi sopno charini hoye ersest labo met, consectetur khobor nio na.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- ! Services ! --}}
    <div class="foliox_tm_section w-full h-auto clear-both float-left" id="service">
        <div class="foliox_tm_services w-full h-auto clear-both float-left mb-[110px]">
            <div class="container">
                <div class="foliox_tm_main_title w-full max-w-[650px] h-auto clear-both my-0 mx-auto text-center">
                    <span class="text-[21px] font-poppins text-extra-color font-medium inline-block mb-[5px]">Services</span>
                    <h3 class="text-[48px]">What I Do for My Clients</h3>
                </div>
                <div class="list w-full h-auto clear-both float-left mt-[70px]">
                    <ul class="ml-[-25px] flex flex-wrap">
                        <li class="wow fadeInUp mb-[25px] pl-[25px] w-1/3" data-wow-duration="1s">
                            <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative bg-[#3a2b71] rounded-[10px] text-center pt-[105px] pr-[65px] pb-[70px] pl-[65px]">
                                <span class="icon inline-block relative w-[65px] h-[65px] rounded-full bg-[#432d92] mb-[53px]">
                                    <img class="svg w-[65px] h-[65px] absolute top-[-50%] left-[-40%] text-extra-color z-[2] transition-all duration-300" src="assets/img/svg/monitor.svg" alt="" />
                                </span>
                                <h3 class="title text-[24px] mb-[20px]">Website Design</h3>
                                <p class="text">Kobita tumi sopno charini hoye ersest labo met, consectetur adipi ctetur adipisicing eod tempor</p>
                            </div>
                        </li>
                        <li class="wow fadeInUp mb-[25px] pl-[25px] w-1/3" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative bg-[#3a2b71] rounded-[10px] text-center pt-[105px] pr-[65px] pb-[70px] pl-[65px]">
                                <span class="icon inline-block relative w-[65px] h-[65px] rounded-full bg-[#432d92] mb-[53px]">
                                    <img class="svg w-[65px] h-[65px] absolute top-[-50%] left-[-40%] text-extra-color z-[2] transition-all duration-300" src="assets/img/svg/anchor.svg" alt="" />
                                </span>
                                <h3 class="title text-[24px] mb-[20px]">Graphic Design</h3>
                                <p class="text">Kobita tumi sopno charini hoye ersest labo met, consectetur adipi ctetur adipisicing eod tempor</p>
                            </div>
                        </li>
                        <li class="wow fadeInUp mb-[25px] pl-[25px] w-1/3" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative bg-[#3a2b71] rounded-[10px] text-center pt-[105px] pr-[65px] pb-[70px] pl-[65px]">
                                <span class="icon inline-block relative w-[65px] h-[65px] rounded-full bg-[#432d92] mb-[53px]">
                                    <img class="svg w-[65px] h-[65px] absolute top-[-50%] left-[-40%] text-extra-color z-[2] transition-all duration-300" src="assets/img/svg/bar.svg" alt="" />
                                </span>
                                <h3 class="title text-[24px] mb-[20px]">Digital Marketing</h3>
                                <p class="text">Kobita tumi sopno charini hoye ersest labo met, consectetur adipi ctetur adipisicing eod tempor</p>
                            </div>
                        </li>
                        <li class="wow fadeInUp mb-[25px] pl-[25px] w-1/3" data-wow-duration="1s">
                            <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative bg-[#3a2b71] rounded-[10px] text-center pt-[105px] pr-[65px] pb-[70px] pl-[65px]">
                                <span class="icon inline-block relative w-[65px] h-[65px] rounded-full bg-[#432d92] mb-[53px]">
                                    <img class="svg w-[65px] h-[65px] absolute top-[-50%] left-[-40%] text-extra-color z-[2] transition-all duration-300" src="assets/img/svg/aim.svg" alt="" />
                                </span>
                                <h3 class="title text-[24px] mb-[20px]">Photography</h3>
                                <p class="text">Kobita tumi sopno charini hoye ersest labo met, consectetur adipi ctetur adipisicing eod tempor</p>
                            </div>
                        </li>
                        <li class="wow fadeInUp mb-[25px] pl-[25px] w-1/3" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative bg-[#3a2b71] rounded-[10px] text-center pt-[105px] pr-[65px] pb-[70px] pl-[65px]">
                                <span class="icon inline-block relative w-[65px] h-[65px] rounded-full bg-[#432d92] mb-[53px]">
                                    <img class="svg w-[65px] h-[65px] absolute top-[-50%] left-[-40%] text-extra-color z-[2] transition-all duration-300" src="assets/img/svg/avatar.svg" alt="" />
                                </span>
                                <h3 class="title text-[24px] mb-[20px]">Consultancy</h3>
                                <p class="text">Kobita tumi sopno charini hoye ersest labo met, consectetur adipi ctetur adipisicing eod tempor</p>
                            </div>
                        </li>
                        <li class="wow fadeInUp mb-[25px] pl-[25px] w-1/3" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative bg-[#3a2b71] rounded-[10px] text-center pt-[105px] pr-[65px] pb-[70px] pl-[65px]">
                                <span class="icon inline-block relative w-[65px] h-[65px] rounded-full bg-[#432d92] mb-[53px]">
                                    <img class="svg w-[65px] h-[65px] absolute top-[-50%] left-[-40%] text-extra-color z-[2] transition-all duration-300" src="assets/img/svg/code.svg" alt="" />
                                </span>
                                <h3 class="title text-[24px] mb-[20px]">Web Development</h3>
                                <p class="text">Kobita tumi sopno charini hoye ersest labo met, consectetur adipi ctetur adipisicing eod tempor</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{{-- ! Portfolio ! --}}
    <div class="foliox_tm_section w-full h-auto clear-both float-left" id="portfolio">
        <div class="foliox_tm_portfolio w-full h-auto clear-both float-left mb-[150px]">
            <div class="container">
                <div class="foliox_tm_main_title w-full max-w-[650px] h-auto clear-both my-0 mx-auto text-center">
                    <span class="text-[21px] font-poppins text-extra-color font-medium inline-block mb-[5px]">Portfolio</span>
                    <h3 class="text-[48px]">What I Do for My Clients</h3>
                </div>
                <div class="portfolio_filter w-full h-auto clear-both float-left text-center mt-[60px] mb-[55px]">
                    <ul>
                        <li class="mr-[35px] inline-block">
                            <a class="current text-white font-poppins font-medium transition-all duration-300 hover:text-extra-color" href="#" data-filter="*">All</a>
                        </li>
                        <li class="mr-[35px] inline-block">
                            <a class="text-white font-poppins font-medium transition-all duration-300 hover:text-extra-color" href="#" data-filter=".youtube">Youtube</a>
                        </li>
                        <li class="mr-[35px] inline-block">
                            <a class="text-white font-poppins font-medium transition-all duration-300 hover:text-extra-color" href="#" data-filter=".vimeo">Vimeo</a>
                        </li>
                        <li class="mr-[35px] inline-block">
                            <a class="text-white font-poppins font-medium transition-all duration-300 hover:text-extra-color" href="#" data-filter=".soundcloud">Soundcloud</a>
                        </li>
                        <li class="mr-[35px] inline-block">
                            <a class="text-white font-poppins font-medium transition-all duration-300 hover:text-extra-color" href="#" data-filter=".popup">Popup</a>
                        </li>
                        <li class="mr-[35px] inline-block">
                            <a class="text-white font-poppins font-medium transition-all duration-300 hover:text-extra-color" href="#" data-filter=".content">Content</a>
                        </li>
                    </ul>
                </div>
                <div class="portfolio_list wow fadeInUp w-full h-auto clear-both float-left" data-wow-duration="1s" data-wow-delay="0.2s">
                    <ul class="gallery_zoom ml-[-13px] flex flex-wrap">
                        <li class="youtube mb-[13px] pl-[13px] w-1/3">
                            <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative overflow-hidden">
                                <div class="image relative">
                                    <img class="relative opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/1-1.jpg')}}" alt="" />
                                    <div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/1.jpg')}})"></div>
                                </div>
                                <div class="details absolute z-[2] bottom-[20px] left-[20px] right-[20px] bg-[#1e1345] p-[20px] rounded-[12px] translate-y-[125%] transition-all duration-300">
                                    <h3 class="text-[20px] mb-[2px]">Axe Droow</h3>
                                    <span class="text-[16px]">Youtube</span>
                                </div>
                                <a class="foliox_tm_full_link absolute inset-0 z-[5] portfolio_popup" href="#"></a>
                                <div class="hidden_content hidden opacity-0 invisible absolute z-[-11]">
                                    <div class="popup_details w-full h-auto clear-both float-left">
                                        <div class="main_details w-full h-auto clear-both flex mb-[60px]">
                                            <div class="textbox w-[70%] pr-[40px]">
                                                <p class="mb-[15px]">
                                                    We live in a world where we need to move
                                                    quickly and iterate on our ideas as flexibly as possible.
                                                </p>
                                                <p>
                                                    Mockups are useful both for the creative phase of the project -
                                                    for instance when you're trying to figure out your user flows or
                                                    the proper visual hierarchy - and the production phase when they
                                                    phase when they will represent the target product. Building
                                                    mockups strikes the ideal balance ease of modification.
                                                </p>
                                            </div>
                                            <div class="detailbox w-[30%] pl-[40px]">
                                                <ul>
                                                    <li class="mb-[10px] w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Client</span>
                                                        <span class="text-[16px]">Alvaro Morata</span>
                                                    </li>
                                                    <li class="mb-[10px] w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Category</span>
                                                        <span class="text-[16px]"><a class="text-main-color" href="#">Content</a></span>
                                                    </li>
                                                    <li class="w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Date</span>
                                                        <span class="text-[16px]">January 07, 2023</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="additional_images w-full h-auto clear-both float-left">
                                            <ul class="ml-[-30px]">
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/1.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/2.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/3.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="vimeo mb-[13px] pl-[13px] w-1/3">
                            <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative overflow-hidden">
                                <div class="image relative">
                                    <img class="relative opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/1-1.jpg')}}" alt="" />
                                    <div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/2.jpg')}})"></div>
                                </div>
                                <div class="details absolute z-[2] bottom-[20px] left-[20px] right-[20px] bg-[#1e1345] p-[20px] rounded-[12px] translate-y-[125%] transition-all duration-300">
                                    <h3 class="text-[20px] mb-[2px]">Mockup Clock</h3>
                                    <span class="text-[16px]">Vimeo</span>
                                </div>
                                <a class="foliox_tm_full_link absolute inset-0 z-[5] portfolio_popup" href="#"></a>
                                <div class="hidden_content hidden opacity-0 invisible absolute z-[-11]">
                                    <div class="popup_details w-full h-auto clear-both float-left">
                                        <div class="main_details w-full h-auto clear-both flex mb-[60px]">
                                            <div class="textbox w-[70%] pr-[40px]">
                                                <p class="mb-[15px]">
                                                    We live in a world where we need to move
                                                    quickly and iterate on our ideas as flexibly as possible.
                                                </p>
                                                <p>
                                                    Mockups are useful both for the creative phase of the project -
                                                    for instance when you're trying to figure out your user flows or
                                                    the proper visual hierarchy - and the production phase when they
                                                    phase when they will represent the target product. Building
                                                    mockups strikes the ideal balance ease of modification.
                                                </p>
                                            </div>
                                            <div class="detailbox w-[30%] pl-[40px]">
                                                <ul>
                                                    <li class="mb-[10px] w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Client</span>
                                                        <span class="text-[16px]">Alvaro Morata</span>
                                                    </li>
                                                    <li class="mb-[10px] w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Category</span>
                                                        <span class="text-[16px]"><a class="text-main-color" href="#">Content</a></span>
                                                    </li>
                                                    <li class="w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Date</span>
                                                        <span class="text-[16px]">January 07, 2023</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="additional_images w-full h-auto clear-both float-left">
                                            <ul class="ml-[-30px]">
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/1.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/2.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/3.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="soundcloud mb-[13px] pl-[13px] w-1/3">
                            <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative overflow-hidden">
                                <div class="image relative">
                                    <img class="relative opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/1-1.jpg')}}" alt="" />
                                    <div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/3.jpg')}})"></div>
                                </div>
                                <div class="details absolute z-[2] bottom-[20px] left-[20px] right-[20px] bg-[#1e1345] p-[20px] rounded-[12px] translate-y-[125%] transition-all duration-300">
                                    <h3 class="text-[20px] mb-[2px]">Afra Porter</h3>
                                    <span class="text-[16px]">Soundcloud</span>
                                </div>
                                <a class="foliox_tm_full_link absolute inset-0 z-[5] portfolio_popup" href="#"></a>
                                <div class="hidden_content hidden opacity-0 invisible absolute z-[-11]">
                                    <div class="popup_details w-full h-auto clear-both float-left">
                                        <div class="main_details w-full h-auto clear-both flex mb-[60px]">
                                            <div class="textbox w-[70%] pr-[40px]">
                                                <p class="mb-[15px]">
                                                    We live in a world where we need to move
                                                    quickly and iterate on our ideas as flexibly as possible.
                                                </p>
                                                <p>
                                                    Mockups are useful both for the creative phase of the project -
                                                    for instance when you're trying to figure out your user flows or
                                                    the proper visual hierarchy - and the production phase when they
                                                    phase when they will represent the target product. Building
                                                    mockups strikes the ideal balance ease of modification.
                                                </p>
                                            </div>
                                            <div class="detailbox w-[30%] pl-[40px]">
                                                <ul>
                                                    <li class="mb-[10px] w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Client</span>
                                                        <span class="text-[16px]">Alvaro Morata</span>
                                                    </li>
                                                    <li class="mb-[10px] w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Category</span>
                                                        <span class="text-[16px]"><a class="text-main-color" href="#">Content</a></span>
                                                    </li>
                                                    <li class="w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Date</span>
                                                        <span class="text-[16px]">January 07, 2023</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="additional_images w-full h-auto clear-both float-left">
                                            <ul class="ml-[-30px]">
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/1.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/2.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/3.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="popup mb-[13px] pl-[13px] w-1/3">
                            <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative overflow-hidden">
                                <div class="image relative">
                                    <img class="relative opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/1-1.jpg')}}" alt="" />
                                    <div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/4.jpg')}})"></div>
                                </div>
                                <div class="details absolute z-[2] bottom-[20px] left-[20px] right-[20px] bg-[#1e1345] p-[20px] rounded-[12px] translate-y-[125%] transition-all duration-300">
                                    <h3 class="text-[20px] mb-[2px]">Good Idea</h3>
                                    <span class="text-[16px]">Popup</span>
                                </div>
                                <a class="foliox_tm_full_link absolute inset-0 z-[5] portfolio_popup" href="#"></a>
                                <!-- Popup Content Start -->
                                <div class="hidden_content hidden opacity-0 invisible absolute z-[-11]">
                                    <div class="popup_details w-full h-auto clear-both float-left">
                                        <div class="main_details w-full h-auto clear-both flex mb-[60px]">
                                            <div class="textbox w-[70%] pr-[40px]">
                                                <p class="mb-[15px]">
                                                    We live in a world where we need to move
                                                    quickly and iterate on our ideas as flexibly as possible.
                                                </p>
                                                <p>
                                                    Mockups are useful both for the creative phase of the project -
                                                    for instance when you're trying to figure out your user flows or
                                                    the proper visual hierarchy - and the production phase when they
                                                    phase when they will represent the target product. Building
                                                    mockups strikes the ideal balance ease of modification.
                                                </p>
                                            </div>
                                            <div class="detailbox w-[30%] pl-[40px]">
                                                <ul>
                                                    <li class="mb-[10px] w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Client</span>
                                                        <span class="text-[16px]">Alvaro Morata</span>
                                                    </li>
                                                    <li class="mb-[10px] w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Category</span>
                                                        <span class="text-[16px]"><a class="text-main-color" href="#">Content</a></span>
                                                    </li>
                                                    <li class="w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Date</span>
                                                        <span class="text-[16px]">January 07, 2023</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="additional_images w-full h-auto clear-both float-left">
                                            <ul class="ml-[-30px]">
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/1.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/2.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/3.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Popup Content End -->
                            </div>
                        </li>
                        <li class="popup mb-[13px] pl-[13px] w-1/3">
                            <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative overflow-hidden">
                                <div class="image relative">
                                    <img class="relative opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/1-1.jpg')}}" alt="" />
                                    <div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-[12px]"  style="background-image: url({{asset('frontend/assets/img/portfolio/5.jpg')}})"></div>
                                </div>
                                <div class="details absolute z-[2] bottom-[20px] left-[20px] right-[20px] bg-[#1e1345] p-[20px] rounded-[12px] translate-y-[125%] transition-all duration-300">
                                    <h3 class="text-[20px] mb-[2px]">Magic Art</h3>
                                    <span class="text-[16px]">Popup</span>
                                </div>
                                <a class="foliox_tm_full_link absolute inset-0 z-[5] portfolio_popup" href="#"></a>
                                <!-- Popup Content Start -->
                                <div class="hidden_content hidden opacity-0 invisible absolute z-[-11]">
                                    <div class="popup_details w-full h-auto clear-both float-left">
                                        <div class="main_details w-full h-auto clear-both flex mb-[60px]">
                                            <div class="textbox w-[70%] pr-[40px]">
                                                <p class="mb-[15px]">
                                                    We live in a world where we need to move
                                                    quickly and iterate on our ideas as flexibly as possible.
                                                </p>
                                                <p>
                                                    Mockups are useful both for the creative phase of the project -
                                                    for instance when you're trying to figure out your user flows or
                                                    the proper visual hierarchy - and the production phase when they
                                                    phase when they will represent the target product. Building
                                                    mockups strikes the ideal balance ease of modification.
                                                </p>
                                            </div>
                                            <div class="detailbox w-[30%] pl-[40px]">
                                                <ul>
                                                    <li class="mb-[10px] w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Client</span>
                                                        <span class="text-[16px]">Alvaro Morata</span>
                                                    </li>
                                                    <li class="mb-[10px] w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Category</span>
                                                        <span class="text-[16px]"><a class="text-main-color" href="#">Content</a></span>
                                                    </li>
                                                    <li class="w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Date</span>
                                                        <span class="text-[16px]">January 07, 2023</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="additional_images w-full h-auto clear-both float-left">
                                            <ul class="ml-[-30px]">
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/1.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/2.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/3.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Popup Content End -->
                            </div>
                        </li>
                        <li class="content mb-[13px] pl-[13px] w-1/3">
                            <div class="list_inner tilt-effect w-full h-auto clear-both float-left relative overflow-hidden">
                                <div class="image relative">
                                    <img class="relative opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/1-1.jpg')}}" alt="" />
                                    <div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/6.jpg')}})"></div>
                                </div>
                                <div class="details absolute z-[2] bottom-[20px] left-[20px] right-[20px] bg-[#1e1345] p-[20px] rounded-[12px] translate-y-[125%] transition-all duration-300">
                                    <h3 class="text-[20px] mb-[2px]">Creative Design</h3>
                                    <span class="text-[16px]">Content</span>
                                </div>
                                <a class="foliox_tm_full_link absolute inset-0 z-[5] portfolio_popup" href="#"></a>
                                <!-- Popup Content Start -->
                                <div class="hidden_content hidden opacity-0 invisible absolute z-[-11]">
                                    <div class="popup_details w-full h-auto clear-both float-left">
                                        <div class="main_details w-full h-auto clear-both flex mb-[60px]">
                                            <div class="textbox w-[70%] pr-[40px]">
                                                <p class="mb-[15px]">
                                                    We live in a world where we need to move
                                                    quickly and iterate on our ideas as flexibly as possible.
                                                </p>
                                                <p>
                                                    Mockups are useful both for the creative phase of the project -
                                                    for instance when you're trying to figure out your user flows or
                                                    the proper visual hierarchy - and the production phase when they
                                                    phase when they will represent the target product. Building
                                                    mockups strikes the ideal balance ease of modification.
                                                </p>
                                            </div>
                                            <div class="detailbox w-[30%] pl-[40px]">
                                                <ul>
                                                    <li class="mb-[10px] w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Client</span>
                                                        <span class="text-[16px]">Alvaro Morata</span>
                                                    </li>
                                                    <li class="mb-[10px] w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Category</span>
                                                        <span class="text-[16px]"><a class="text-main-color" href="#">Content</a></span>
                                                    </li>
                                                    <li class="w-full float-left">
                                                        <span class="first font-medium text-[18px] block text-white font-poppins">Date</span>
                                                        <span class="text-[16px]">January 07, 2023</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="additional_images w-full h-auto clear-both float-left">
                                            <ul class="ml-[-30px]">
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/1.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/2.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mb-[30px] float-left pl-[30px]">
                                                    <div class="list_inner w-full h-auto clear-both float-left relative">
                                                        <div class="my_image relative">
                                                            <img class="opacity-0 min-w-full" src="{{asset('frontend/assets/img/thumbs/4-2.jpg')}}" alt="" />
                                                            <div class="main absolute inset-0 bg-no-repeat bg-center bg-cover rounded-[12px]" style="background-image: url({{asset('frontend/assets/img/portfolio/3.jpg')}})"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Popup Content End -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{{-- ! Testmonials ! --}}
    <div class="foliox_tm_section w-full h-auto clear-both float-left">
        <div class="foliox_tm_testimonials w-full h-auto clear-both float-left mb-[170px]">
            <div class="container">
                <div class="foliox_tm_main_title w-full max-w-[650px] h-auto clear-both my-0 mx-auto text-center">
                    <span class="text-[21px] font-poppins text-extra-color font-medium inline-block mb-[5px]">Testimonials</span>
                    <h3 class="text-[48px]">What Clients Say</h3>
                </div>
                <div class="list_wrapper w-full h-auto clear-both float-left relative mt-[50px]">
                    <div class="total w-full h-auto clear-both float-left relative">
                        <div class="in wow fadeInUp w-full max-w-[900px] text-center my-0 mx-auto" data-wow-duration="1s">
                            <ul class="owl-carousel owl-theme">
                                <li>
                                    <div class="icon mb-[35px] inline-block">
                                        <img class="svg w-[80px] h-[80px] text-extra-color" src="{{asset('frontend/assets/img/svg/quote.svg')}}" alt="" />
                                    </div>
                                    <div class="text mb-[60px]">
                                        <p class="text-[30px] italic leading-[1.6] text-white">
                                            I rarely like to
                                            write reviews, but the Itemstore team truly deserve a standing ovation
                                            for their customer support, customisation and most importantly,
                                            friendliness and professionalism. Many thanks once again for everything
                                            and hope that I get to deal with you again in the near future.
                                        </p>
                                    </div>
                                    <div class="short w-auto flex items-center justify-center">
                                        <div class="image relative w-[60px] h-[60px] rounded-full">
                                            <div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-full" style="background-image: url({{asset('frontend/assets/img/testimonials/1.jpg')}})"></div>
                                        </div>
                                        <div class="detail text-left pl-[25px]">
                                            <h3 class="text-[24px]">Keita Smith</h3>
                                            <span class="text-[16px]">ABC Group</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon mb-[35px] inline-block">
                                        <img class="svg w-[80px] h-[80px] text-extra-color" src="{{asset('frontend/assets/img/svg/quote.svg')}}" alt="" />
                                    </div>
                                    <div class="text mb-[60px]">
                                        <p class="text-[30px] italic leading-[1.6] text-white">
                                            Really the Code
                                            Quality, Customer Support, and design are awesome and its good support
                                            they are giving. They give an instant solution to our needs. Really
                                            awesome. I will strongly recommend to my friends. Simply amazing team
                                            and amazing theme! Thank you from United States of America!
                                        </p>
                                    </div>
                                    <div class="short w-auto flex items-center justify-center">
                                        <div class="image relative w-[60px] h-[60px] rounded-full">
                                            <div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-full" style="background-image: url({{asset('frontend/assets/img/testimonials/2.jpg')}})"></div>
                                        </div>
                                        <div class="detail text-left pl-[25px]">
                                            <h3 class="text-[24px]">Mike Anderson</h3>
                                            <span class="text-[16px]">Vivaco Studio</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon mb-[35px] inline-block">
                                        <img class="svg w-[80px] h-[80px] text-extra-color" src="{{asset('frontend/assets/img/svg/quote.svg')}}" alt="" />
                                    </div>
                                    <div class="text mb-[60px]">
                                        <p class="text-[30px] italic leading-[1.6] text-white">
                                            Loved the template
                                            design, documentation, customizability and the customer support from
                                            Itemstore team! I am a noob in programming with very little knowledge
                                            about coding but the Itemstore team helped me to launch my resume
                                            website successfully. Much recommended!
                                        </p>
                                    </div>
                                    <div class="short w-auto flex items-center justify-center">
                                        <div class="image relative w-[60px] h-[60px] rounded-full">
                                            <div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-full" style="background-image: url({{asset('frontend/assets/img/testimonials/3.jpg')}})"></div>
                                        </div>
                                        <div class="detail text-left pl-[25px]">
                                            <h3 class="text-[24px]">MAlan Walker</h3>
                                            <span class="text-[16px]">Web Designer</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- ! Partner ! --}}
    <div class="foliox_tm_section w-full h-auto clear-both float-left">
        <div class="foliox_tm_partners w-full h-auto clear-both float-left mb-[160px]">
            <div class="container">
                <div class="partners_list tilt-effect wow fadeInUp w-full h-auto clear-both float-left bg-[#432d92] rounded-[12px] py-[70px] px-0" data-wow-duration="1s">
                    <ul class="owl-carousel flex items-center">
                        <li class="item opacity-50 text-center transition-all duration-300 hover:opacity-100">
                            <img class="max-w-[95%] max-h-[180px]" src="{{asset('frontend/assets/img/partners/1.png')}}" alt="partner img" />
                        </li>
                        <li class="item opacity-50 text-center transition-all duration-300 hover:opacity-100">
                            <img class="max-w-[95%] max-h-[180px]" src="{{asset('frontend/assets/img/partners/2.png')}}" alt="partner img" />
                        </li>
                        <li class="item opacity-50 text-center transition-all duration-300 hover:opacity-100">
                            <img class="max-w-[95%] max-h-[180px]" src="{{asset('frontend/assets/img/partners/3.png')}}" alt="partner img" />
                        </li>
                        <li class="item opacity-50 text-center transition-all duration-300 hover:opacity-100">
                            <img class="max-w-[95%] max-h-[180px]" src="{{asset('frontend/assets/img/partners/4.png')}}" alt="partner img" />
                        </li>
                        <li class="item opacity-50 text-center transition-all duration-300 hover:opacity-100">
                            <img class="max-w-[95%] max-h-[180px]" src="{{asset('frontend/assets/img/partners/5.png')}}" alt="partner img" />
                        </li>
                        <li class="item opacity-50 text-center transition-all duration-300 hover:opacity-100">
                            <img class="max-w-[95%] max-h-[180px]" src="{{asset('frontend/assets/img/partners/6.png')}}" alt="partner img" />
                        </li>
                        <li class="item opacity-50 text-center transition-all duration-300 hover:opacity-100">
                            <img class="max-w-[95%] max-h-[180px]" src="{{asset('frontend/assets/img/partners/7.png')}}" alt="partner img" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{{-- ! Contact ! --}}
    <div class="foliox_tm_section w-full h-auto clear-both float-left" id="contact">
        <div class="foliox_tm_contact w-full h-auto clear-both float-left">
            <div class="container">
                <div class="foliox_tm_main_title w-full max-w-[650px] h-auto clear-both my-0 mx-auto text-center">
                    <span class="text-[21px] font-poppins text-extra-color font-medium inline-block mb-[5px]">Contact</span>
                    <h3 class="text-[48px]">I Want to Hear from You</h3>
                </div>
                <div class="contact_inner w-full flex mt-[80px] mb-[182px] relative">
                    <div class="left wow fadeInLeft w-1/2" data-wow-duration="1s">
                        <ul>
                            <li class="mb-[15px]">
                                <div class="list_inner flex items-center">
                                    <div class="icon w-[88px] h-[88px] rounded-full relative bg-extra-color">
                                        <i class="icon-location absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[24px] text-white"></i>
                                    </div>
                                    <div class="short pl-[25px]">
                                        <h3 class="text-[30px] mb-[5px]">Address</h3>
                                        <span>20, Somewhere in world</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-[15px]">
                                <div class="list_inner flex items-center">
                                    <div class="icon w-[88px] h-[88px] rounded-full relative bg-extra-color">
                                        <i class="icon-mail-1 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[24px] text-white"></i>
                                    </div>
                                    <div class="short pl-[25px]">
                                        <h3 class="text-[30px] mb-[5px]">Email</h3>
                                        <span>
                                            <a class="text-[#b4afc6] transition-all duration-300 hover:text-extra-color" href="#">
                                                <span class="__cf_email__" data-cfemail="2048454c4c4f60444f444f0e434f4d">[email&#160;protected]</span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="mb-[15px]">
                                <div class="list_inner flex items-center">
                                    <div class="icon w-[88px] h-[88px] rounded-full relative bg-extra-color">
                                        <i class="icon-phone absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[24px] text-white"></i>
                                    </div>
                                    <div class="short pl-[25px]">
                                        <h3 class="text-[30px] mb-[5px]">Phone</h3>
                                        <span>+123 456 7890</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="right wow fadeInRight w-1/2" data-wow-duration="1s">
                        <div class="fields w-full clear-both float-left h-auto">
                            <form action="/" method="post" class="contact_form" id="contact_form" autocomplete="off">
                                <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                                <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                <div class="input_list w-full clear-both float-left h-auto">
                                    <ul class="ml-[-12px]">
                                        <li class="mb-[12px] w-1/2 float-left pl-[12px]">
                                            <input id="name" type="text" placeholder="Your Name" />
                                        </li>
                                        <li class="mb-[12px] w-1/2 float-left pl-[12px]">
                                            <input id="email" type="text" placeholder="Your Email" />
                                        </li>
                                        <li class="mb-[12px] w-1/2 float-left pl-[12px]">
                                            <input id="phone" type="number" placeholder="Your Phone" />
                                        </li>
                                        <li class="mb-[12px] w-1/2 float-left pl-[12px]">
                                            <input id="subject" type="text" placeholder="Subject" />
                                        </li>
                                    </ul>
                                </div>
                                <div class="message_area w-full float-left mb-[4px]">
                                    <textarea id="message" placeholder="Write your message here"></textarea>
                                </div>
                                <div class="foliox_tm_button">
                                    <a id="send_message" href="#">
                                        <span>Submit Now</span>
                                    </a>
                                </div>
                                <!-- If you want to change mail address to yours please open modal.php folder and go to the line 4 -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- ! Footer ! --}}
    <div class="foliox_tm_section w-full h-auto clear-both float-left">
        <div class="foliox_tm_copyright w-full h-auto clear-both float-left text-center py-[100px] px-0">
            <div class="container">
                <p class="wow fadeInUp font-poppins" data-wow-duration="1s">
                    Developed with love by
                    <a class="text-white transition-all duration-300 hover:text-extra-color" href="https://themeforest.net/user/itemstore/portfolio" target="_blank">Itemstore</a>
                    &copy; 2023
                </p>
            </div>
        </div>
    </div>
{{-- ! Scroll top ! --}}
    <div class="progressbar fixed h-[100px] w-[1px] bottom-[25px] right-[-25px] bg-[rgba(255,255,255,.2)] z-[10] transition-all duration-300">
        <a class="text-white" href="#">
            <span class="text absolute bottom-[100px] left-0 text-[13px] uppercase origin-left whitespace-nowrap">To Top</span>
        </a>
        <span class="line absolute w-[1px] h-auto bg-extra-color"></span>
    </div>
@endsection
