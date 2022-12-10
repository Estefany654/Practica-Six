<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tracks') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if( $tracks->count() )
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-4">ID</th>
                                <th scope="col" class="py-3 px-4">{{ __('Title') }}</th>
                                <th scope="col" class="py-3 px-4">{{ __('Path') }}</th>
                                <th scope="col" class="py-3 px-4">&nbsp;</th>
                                <th scope="col" class="py-3 px-4">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tracks as $track)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <td class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $track->id }}</td>
                                <td class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $track->title }}</td>
                                <td class="py-4 px-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                 <audio src="{{ $track->getUrlPath() }}" controls > musica</audio>
                                 </td>    
                                <td>
                                    <a class="font-medium text-orange-600 dark:text-orange-500 hover:underline" href="{{ route('tracks.edit', ['track' => $track]) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                        </svg>                                          
                                    </a>
                                </td>
                                <td scope="col" class="py-3 px-4">
                                <td scope="col" class="py-3 px-4">
                                    <form action="{{ route('tracks.destroy', ['track' => $track]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="font-medium text-red-600 dark:text-red-500 hover:underline" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>                                              
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    
                    <a class="font-medium text-green-600 dark:text-green-500 hover:underline" href="{{ route('tracks.create') }}">
                        Insertar nueva cancion                                 
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>

