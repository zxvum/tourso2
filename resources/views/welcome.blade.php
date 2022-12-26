@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ url(asset('assets/mouse.css')) }}">
@endsection

@section('content')
    <header class="w-full h-[60px] bg-[#1c252c]">
        <div class="container mx-auto flex items-center h-full justify-between">
            <div>
                <img class="w-[150px] object-contain" src="{{ asset('assets/img/standoff-logo.png') }}" alt="standoff 2">
            </div>
            <div>
                <a href="https://google.com" class="px-[12px] py-[8px] border border-[#6d7c88] rounded-lg text-[#ced7de] text-sm transition duration-200 hover:bg-[#6d7c88] hover:text-white">Войти в аккаунт</a>
            </div>
        </div>
    </header>
    <section class="w-full relative" style="height: calc(100vh - 60px)">
        <img src="{{ url(asset('assets/img/banner.jpg')) }}" alt="banner" class="absolute top-0 left-0 w-full object-cover z-0 h-full">
        <div class="absolute z-10 top-0 w-full h-full bg-black bg-opacity-80"></div>
        <div class="pt-20 z-20 relative container mx-auto flex flex-col items-center">
            <div class="w-full">
                <img src="{{ url(asset('assets/img/appicon.jpg')) }}" alt="icon" class="w-20 h-20 mx-auto">
                <p class="text-white mt-4 text-2xl text-center">Standoff 2 Турниры</p>
                <p class="text-[#ced7de] mt-2 text-center">Найдите киберспортивные турниры по Standoff 2, проходящие в сотнях сообществ по всему миру. Нажмите на "Присоединиться", чтобы принять участие в турнире по Standoff 2.</p>
            </div>
            <div class="w-full flex flex-col items-center justify-center mt-10 w-[225px]">
                <a href="#" class="text-white w-full text-center py-[14px] rounded-lg border-2 border-[#426bff] bg-[#426bff] transition duration-200 hover:bg-opacity-80">Участвовать в турнире</a>
                <a href="#" class="text-white w-full text-center py-[14px] rounded-lg border-2 border-[#6d7c88] transition duration-200 hover:bg-opacity-80 hover:bg-[#6d7c88] mt-3 ">Создать турнир</a>
            </div>
        </div>
        <div class="scroll-downs">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <div class="flex items-center justify-between">
                <p class="text-white text-2xl">12 Турниров</p>
                <select name="" id="" class="text-xs rounded-md bg-transparent text-white">
                    <option selected disabled>Выберите платформу</option>
                    <option>Discord</option>
                    <option>Web</option>
                </select>
            </div>
            <div class="flex flex-col mt-5">
                <div class="w-full shadow-lg bg-[#222d35] rounded-xl border-t-2 border-[#161d22] transition duration-200 hover:-translate-y-2 hover:border-[#4558ed]">
                    <div class="h-[150px] bg-[#272727] rounded-t-xl flex items-center justify-center p-10 relative">
                        <img src="{{ asset('assets/img/standoff-logo.png') }}" alt="logo">
                        <p class="absolute top-2 right-4 text-white">RU <img src="{{ url(asset()) }}" alt=""></p>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between">
                            <p class="text-[#a3afb8]">Платформа - Discord</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
