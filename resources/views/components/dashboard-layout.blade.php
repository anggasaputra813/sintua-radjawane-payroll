<x-navbar>
    <label for="my-drawer-2" class="btn btn-square btn-ghost drawer-button lg:hidden">
        <x-menu-icon></x-menu-icon>
    </label>

    <a href="/" class="text-xl font-bold">SINTUA RADJAWANE SH & PARTNERS</a>

    <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-outline hover:btn-ghost m-1" style="color: aliceblue">{{Auth::user()->nama}}</label>
        <div tabindex="0" class="dropdown-content p-2 shadow bg-base-100 rounded-box w-52 border grid gap-2">
            <a class="btn btn-ghost" href="{{route('profile.edit')}}" style="color: #000000">edit profile</a>
            <form  method="post" action="{{route('logout')}}" class="inline-flex">
                @csrf
                <button class="btn btn-ghost text-error w-full">logout</button>
            </form>
        </div>
    </div>
</x-navbar>

<div class="drawer drawer-mobile" style="background-color: #ecebf3">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content pt-24 px-6" style="margin-left: 300px;">
        <!-- Page content here -->
        {{$slot}}
    </div>

    <div class="sidebar" style="background-color: #575375; height: 100vh; width: 280px; position: fixed; top: 0; left: 0; padding-top: 4rem;">
        
        <ul class="menu p-4 text-white" style="font-size: 20px;">
            <li><a href="{{ route('lokasi.index') }}" style="display: block; padding: 10px; color: {{ request()->route()->getName() == 'lokasi.index' ? '' : 'inherit' }}; background-color: {{ request()->route()->getName() == 'lokasi.index' ? 'rgb(54, 50, 97)' : 'transparent' }};">Lokasi</a></li>
            <li><a href="{{ route('jabatan.index') }}" style="display: block; padding: 10px; color: {{ request()->route()->getName() == 'jabatan.index' ? '' : 'inherit' }}; background-color: {{ request()->route()->getName() == 'jabatan.index' ? 'rgb(54, 50, 97)' : 'transparent' }};">Jabatan</a></li>
            <li><a href="{{ route('anggota.index') }}" style="display: block; padding: 10px; color: {{ request()->route()->getName() == 'anggota.index' ? '' : 'inherit' }}; background-color: {{ request()->route()->getName() == 'anggota.index' ? 'rgb(54, 50, 97)' : 'transparent' }};">Karyawan</a></li>
            <li><a href="{{ route('admin.index') }}" style="display: block; padding: 10px; color: {{ request()->route()->getName() == 'admin.index' ? '' : 'inherit' }}; background-color: {{ request()->route()->getName() == 'admin.index' ? 'rgb(54, 50, 97)' : 'transparent' }};">Admin</a></li>
            <li><a href="{{ route('potongan-gaji.index') }}" style="display: block; padding: 10px; color: {{ request()->route()->getName() == 'potongan-gaji.index' ? '' : 'inherit' }}; background-color: {{ request()->route()->getName() == 'potongan-gaji.index' ? 'rgb(54, 50, 97)' : 'transparent' }};">Potongan Gaji</a></li>
            <li><a href="{{ route('jadwal.index') }}" style="display: block; padding: 10px; color: {{ request()->route()->getName() == 'jadwal.index' ? '' : 'inherit' }}; background-color: {{ request()->route()->getName() == 'jadwal.index' ? 'rgb(54, 50, 97)' : 'transparent' }};">Jadwal</a></li>
            <li><a href="{{ route('list-absensi-anggota') }}" style="display: block; padding: 10px; color: {{ request()->route()->getName() == 'list-absensi-anggota' ? '' : 'inherit' }}; background-color: {{ request()->route()->getName() == 'list-absensi-anggota' ? 'rgb(54, 50, 97)' : 'transparent' }};">Absensi</a></li>
            <li><a href="{{ route('laporan-gaji') }}" style="display: block; padding: 10px; color: {{ request()->route()->getName() == 'laporan-gaji' ? '' : 'inherit' }}; background-color: {{ request()->route()->getName() == 'laporan-gaji' ? 'rgb(54, 50, 97)' : 'transparent' }};">Laporan Gaji</a></li>
        </ul>
    </div>
</div>


  </div>
