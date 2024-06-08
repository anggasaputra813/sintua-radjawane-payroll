<x-app-layout>
	<div class="space-y-6" style="margin-top: 30px">
		<div class="bg-white rounded-lg shadow-lg p-4">
			<div class="overflow-x-auto">
				<a href="{{ route('lokasi.create') }}" class="btn btn-success">tambah lokasi</a>
				<table class="table w-full mt-4 border-collapse border border-gray-300 ">
					<thead >
						<tr>
							<th>no</th>
							<th>nama lokasi</th>
							<th>alamat</th>
							<th>aksi</th>
						</tr>
					</thead>
					<tbody>
						@forelse($list_lokasi as $lokasi)
						<tr>
							<th>{{ $loop->iteration }}</th>
							<td>{{ $lokasi->nama_lokasi }}</td>
							<td>{{ $lokasi->alamat }}</td>
							<td>
								<div class="space-x-2">
									<a href="{{ route('lokasi.edit', ['lokasi' => $lokasi]) }}" class="btn">edit</a>
									<form class="inline-flex" action="{{ route('lokasi.destroy', ['lokasi' => $lokasi]) }}" method="post">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-error">hapus</button>
									</form>
								</div>
							</td>
						</tr>
						@empty
						<tr>
							<td colspan="4">
								<h1 class="text-xl text-center text-gray-500">belum ada data</h1>
							</td>
						</tr>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	
</x-app-layout>
