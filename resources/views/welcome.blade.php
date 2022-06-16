<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TTDevOps</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg width="309" height="63" viewBox="0 0 309 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.73234 25.6991C4.73234 24.7952 4.1958 24.3556 3.39098 24.3556H0.952148L0.952148 18.0044C2.95199 17.3937 4.85428 17.1006 6.56146 17.1006C9.85389 17.1006 12.4634 18.1265 12.4634 21.2533L12.4634 41.5769C12.4634 42.4807 12.9512 42.9204 13.8048 42.9204H16.2436V49.1983C14.2438 49.809 12.3415 50.1754 10.6343 50.1754C7.34189 50.1754 4.73234 49.0762 4.73234 45.9739L4.73234 25.6991Z" fill="#FFFFFF"></path>
                        <path d="M20.2421 25.6986C20.2421 24.7948 19.7543 24.3551 18.9007 24.3551H16.4619V18.0772C18.4618 17.4665 20.364 17.1001 22.0712 17.1001C25.3637 17.1001 27.6805 18.4436 27.6805 21.5459V22.4497C27.6805 23.1093 27.5586 23.7932 27.5586 23.7932H27.6805C29.8755 19.3963 35.2409 17.0757 38.7772 17.0757C42.1916 17.0757 45.9718 19.2009 47.0693 23.7932H47.118C48.874 19.5917 54.3614 17.0757 58.0928 17.0757C63.0192 17.0757 66.9945 20.007 67.0433 26.6024L67.0921 41.552C67.0921 42.407 67.5799 42.8955 68.4334 42.8955H70.1406V49.1734C68.1408 49.8329 66.4824 50.1505 65.0191 50.1505C60.8243 50.1505 59.361 47.952 59.361 45.0207V29.8757C59.361 25.9673 57.4831 24.2085 54.8004 24.2085C51.7518 24.2085 47.4839 28.1169 47.4839 35.5673V49.1734H39.8015V29.9001C39.8015 25.9917 37.9236 24.2329 35.2409 24.2329C32.1924 24.2329 27.9244 27.5795 27.9244 35.5917V49.1978H20.2421V25.6986Z" fill="#FFFFFF"></path>
                        <path d="M287.733 15.3417V29.876H289.563C290.465 29.876 292.172 29.6806 293.709 27.2623L299.318 18.102H307.903L301.927 27.9218C299.928 30.9752 298.391 32.1233 297.416 32.563C298.391 32.9294 299.781 33.8333 300.952 36.105L303.805 41.6012C304.293 42.5783 304.708 42.9447 305.561 42.9447H308.122V49.2226C306.122 49.8821 304.342 50.1997 302.879 50.1997C298.684 50.1997 298.196 48.2455 296.538 45.0699L292.587 36.96C292.05 35.8607 290.392 35.8119 289.416 35.8119H287.709V49.247H279.978V14.9752C279.978 12.5325 278.637 11.4333 276.807 11.4333C275.295 11.4333 273.832 12.5325 273.832 14.2913C273.832 16.0012 275.417 17.2714 276.564 17.3447V24.7951C276.564 24.7951 275.783 24.673 274.686 24.673C269.564 24.673 265.004 28.5081 265.004 36.8867V49.2226H257.321V25.7966C257.321 24.8928 256.833 24.4531 255.98 24.4531H253.541V18.102C255.541 17.4913 257.443 17.1249 259.15 17.1249C262.443 17.1249 264.76 18.5905 264.76 21.6928C264.76 23.647 264.638 25.1615 264.565 25.6501H264.686C265.662 22.4745 267.662 19.421 270.467 18.0287C269.613 17.3691 268.028 15.5859 268.028 12.9722C268.028 8.8928 271.735 5.22868 277.417 5.22868C283.661 5.20425 287.733 7.96455 287.733 15.3417Z" fill="#FFFFFF"></path>
                        <path d="M7.93177 0.201896L0.861328 7.28369L7.50065 13.9337L14.5711 6.85188L7.93177 0.201896Z" fill="#FFFFFF"></path>
                        <path d="M90.4562 29.8024V29.3138C90.4562 25.1123 87.5296 23.7688 83.9933 23.7688C80.7741 23.7688 76.9939 24.9169 74.4331 25.894L74.3112 19.1276C76.6768 18.1505 81.1399 17.1245 85.4566 17.1245C91.8464 17.1245 98.1873 19.3718 98.1873 27.6772V41.6008C98.1873 42.4558 98.6751 42.9443 99.5287 42.9443H101.968V49.2222C100.382 50.0039 98.6751 50.1993 97.0898 50.1993C93.7974 50.1993 91.0659 48.8069 91.0659 45.8024C91.0659 45.0207 91.1147 44.4589 91.1147 44.4589H90.9928C90.9928 44.4589 88.6271 50.1993 81.6033 50.1993C76.0671 50.1993 71.1895 46.4863 71.1895 40.2573C71.2138 30.4619 83.5787 29.8024 90.4562 29.8024ZM83.5056 43.897C87.6516 43.897 90.5782 39.8665 90.5782 36.0802V35.3474C84.7981 35.3474 78.9937 35.836 78.9937 40.1596C78.9937 42.236 80.3351 43.897 83.5056 43.897Z" fill="#FFFFFF"></path>
                        <path d="M124.477 46.2177C124.477 45.4848 124.55 44.581 124.55 44.581H124.429C122.599 47.1948 119.917 48.6115 115.771 48.6115C106.869 48.6115 101.821 41.4054 101.821 32.8802C101.821 24.355 106.625 17.1245 115.6 17.1245C122.795 17.1245 125.038 21.7657 125.038 21.7657H125.16V21.3993C125.16 18.297 127.038 17.1245 130.331 17.1245C132.038 17.1245 133.916 17.4909 135.94 18.1016V24.3795H133.501C132.647 24.3795 132.16 24.7947 132.16 25.723V47.3169C132.16 54.2054 126.55 62.0222 115.722 62.0222C111.405 62.0222 107.186 60.6787 104.747 59.4085L104.869 52.5688C107.796 54.2787 111.747 55.378 114.99 55.378C119.429 55.378 124.502 52.5688 124.502 47.6833V46.2177H124.477ZM124.672 32.9047C124.672 25.8207 121.136 23.6955 116.941 23.6955C112.259 23.6955 109.698 27.3596 109.698 32.6115C109.698 38.0344 112.429 42.065 117.429 42.065C121.136 42.065 124.672 39.9398 124.672 32.9047Z" fill="#FFFFFF"></path>
                        <path d="M151.378 17.1006C160.28 17.1006 164.719 23.867 164.719 32.1235C164.719 33.0273 164.524 35.4212 164.524 35.4212H143.33C143.94 40.9174 148.33 43.7265 153.012 43.7265C157.939 43.7265 161.963 41.2838 161.963 41.2838V47.1952C158.378 49.2716 155.5 50.1265 151.061 50.1265C142.599 50.1265 135.526 43.238 135.526 33.6624C135.55 24.0624 142.062 17.1006 151.378 17.1006ZM157.427 29.4365C157.427 25.0395 153.842 22.9632 150.598 22.9632C146.574 22.9632 143.598 27.0426 143.598 29.4365H157.427Z" fill="#FFFFFF"></path>
                        <path d="M199.765 22.3036C199.765 22.3036 202.374 17.125 209.642 17.125C218.056 17.125 223.47 24.0136 223.47 33.6624C223.47 43.5555 217.69 49.467 209.52 49.638C204.106 49.638 200.252 45.6807 200.13 45.6807V61.4364H192.643V25.7235C192.643 24.8197 192.155 24.38 191.302 24.38H188.863V18.0777C190.863 17.467 192.765 17.1006 194.472 17.1006C197.765 17.1006 199.765 18.2487 199.765 21.3754V22.3036ZM207.618 43.7754C212.178 43.7754 215.178 39.6227 215.178 33.8334C215.178 28.0929 212.203 23.8181 207.618 23.8181C203.179 23.8181 200.179 28.0929 200.179 33.8334C200.179 39.6227 203.155 43.7754 207.618 43.7754Z" fill="#FFFFFF"></path>
                        <path d="M243.394 29.8024V29.3138C243.394 25.1123 240.467 23.7688 236.931 23.7688C233.712 23.7688 229.932 24.9169 227.371 25.894L227.249 19.1276C229.615 18.1505 234.078 17.1245 238.394 17.1245C244.784 17.1245 251.125 19.3718 251.125 27.6772V41.6008C251.125 42.4558 251.613 42.9443 252.466 42.9443H254.905V49.2222C253.32 50.0039 251.613 50.1993 250.028 50.1993C246.735 50.1993 244.004 48.8069 244.004 45.8024C244.004 45.0207 244.077 44.4589 244.077 44.4589H243.955C243.955 44.4589 241.589 50.1993 234.565 50.1993C229.029 50.1993 224.152 46.4863 224.152 40.2573C224.152 30.4619 236.517 29.8024 243.394 29.8024ZM236.443 43.897C240.589 43.897 243.516 39.8665 243.516 36.0802V35.3474C237.736 35.3474 231.932 35.836 231.932 40.1596C231.932 42.236 233.273 43.897 236.443 43.897Z" fill="#FFFFFF"></path>
                        <path d="M151.378 17.0034C160.304 17.0034 164.767 23.7943 164.767 32.0752C164.767 33.0034 164.572 35.3729 164.572 35.3729H143.305C143.915 40.8935 148.305 43.7027 153.012 43.7027C157.963 43.7027 161.987 41.2599 161.987 41.2599V47.1958C158.377 49.2721 155.5 50.1271 151.037 50.1271C142.549 50.1271 135.452 43.2141 135.452 33.5897C135.477 23.9897 142.013 17.0034 151.378 17.0034ZM157.426 29.3637C157.426 24.9668 153.817 22.866 150.573 22.866C146.549 22.866 143.549 26.9698 143.549 29.3637H157.426Z" fill="#FFFFFF"></path>
                        <path d="M186.521 25.5276C184.814 24.062 182.058 23.0116 179.79 23.0116C174.961 23.0116 174.156 25.3322 174.156 26.1383C174.156 28.8986 177.571 29.6314 180.156 30.4864C183.766 31.6589 189.814 33.491 189.814 39.72C189.814 44.7276 185.058 50.1994 176.547 50.1994C172.766 50.1994 168.913 49.0268 166.035 47.5612V41.0635C166.474 41.2589 171.059 43.8238 175.327 43.8238C179.595 43.8238 181.497 42.2849 181.497 40.4039C181.497 34.4681 166.279 36.9841 166.279 26.3826C166.279 22.7673 168.84 17.0269 178.205 17.0269C180.034 17.0269 182.839 17.0269 186.521 18.9322V25.5276Z" fill="#FFFFFF"></path>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://imagespark.ru" class="underline text-gray-900 dark:text-white">Наш сайт</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Мы создаём уникальные системы дистанционного обучения для бизнеса и вузов.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://imagespark.ru/blog/" class="underline text-gray-900 dark:text-white">Блог</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Создание того, что мы так сильно любим, только в тексте. 
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="mailto:noc@devspark.ru" class="underline text-gray-900 dark:text-white">Авторы</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Отдел Программно-технического администрирования!<br /><br />
                                    Если тебе понравилось и было интересно, либо у тебя есть пожелания по улучшению данного тестового задания, то напиши нам на почту, и мы обязательно ответим тебе. 
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Пожелания</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    DevOps - это безумно интересно, поэтому будь в тренде, развивайся и главное следи за новыми технологиями, потому что IT - не стоит на месте ни минуты.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
