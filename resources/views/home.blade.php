<x-layout>
  @auth
    <x-user-navbar></x-user-navbar>
    <x-landing-page :products="$products"></x-landing-page>
    <x-footer></x-footer>
  @else
   
  @endauth
</x-layout>