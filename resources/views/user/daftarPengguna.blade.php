<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Pengguna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('user.registrasi') }}" class="btn btn-icon btn-dark">Tambah</a><br><br>
                    <table class="min-w-full table-auto">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border px-4 py-2">No</th>
                                <th class="border px-4 py-2">Name</th>
                                <th class="border px-4 py-2">Username</th>
                                <th class="border px-4 py-2">Gender</th>
                                <th class="border px-4 py-2">Address</th>
                                <th class="border px-4 py-2">PhoneNumber</th>
                                <th class="border px-4 py-2">BirthDate</th>
                                <th class="border px-4 py-2">Religion</th>
                                <th class="border px-4 py-2">View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $user)
                                <tr>
                                    <td class="border px-4 py-2">{{ $key + 1 }}</td>
                                    <td class="border px-4 py-2">{{ $user->fullname }}</td>
                                    <td class="border px-4 py-2">{{ $user->username }}</td>
                                    <td class="border px-4 py-2">{{ $user->gender == 0 ? 'Perempuan' : 'Laki-laki' }}</td>
                                    <td class="border px-4 py-2">{{ $user->address }}</td>
                                    <td class="border px-4 py-2">{{ $user->phoneNumber }}</td>
                                    <td class="border px-4 py-2">{{ $user->birthdate }}</td>
                                    <td class="border px-4 py-2">{{ $user->agama }}</td>
                                    <td>
                                        <a href="{{ route('user.infoPengguna', $user->id) }}">Lihat</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>