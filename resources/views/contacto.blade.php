@extends('layouts.nav')
@section('content')
@if(session()->has("mensaje"))
  <div class="alert alert-success" role="alert">
    {{session ("mensaje")}}
  </div>
@endif
<section class="bg-white white:bg-gray-900" style="">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contacta con
      nosotros</h2>
    <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">¿Tienes algún problema?
      Dejanos saberlo.</p>
    <form action="/contacto" class="space-y-8" method="POST">
      @csrf
      <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tu email</label>
        <input type="email" id="email"
          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
          placeholder="ejemplo@email.com" value="{{ old('email') }}">
        @error('email')
        <p class="bg-red-600">{{$message}}</p>
        @enderror
      </div>
      <div>
        <label for="confemail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirmar Email</label>
        <input type="email" id="confemail"
          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
          placeholder="ejemplo@email.com" value="{{ old('confemail') }}">
        @error('email')
        <p class="bg-red-600">{{$message}}</p>
        @enderror
      </div>
      <div>
        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Asunto</label>
        <input type="text" id="subject"
          class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
          placeholder="Tu asunto" value="{{ old('subject') }}">
          @error('subject')
          <p class="bg-red-600">{{$message}}</p>
          @enderror
      </div>
      <div class="sm:col-span-2">
        <label for="texto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tu mensaje</label>
        <textarea id="texto" rows="6"
          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
          placeholder="Deja tu mensaje...">{{ old('texto') }}</textarea>
      </div>
      <button type="submit"
        class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Enviar
        mensaje</button>
    </form>
  </div>
</section>
@endsection