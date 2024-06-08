<x-app-layout>
	<div class="space-y-6" style="margin-top: 30px">
		<div class="bg-white rounded-lg shadow-lg p-4">
		<a href="{{ route('potongan-gaji.create') }}" class="btn btn-success" style="margin-bottom:17px ">tambah potongan gaji</a>
		<div class="overflow-x-auto border rounded-lg">
		  <table class="table w-full">
		    <thead>
		      <tr>
		        <th>no</th>
		        <th>keterangan</th>
		        <th>nilai potongan</th>
		        <th>aksi</th>
		      </tr>
		    </thead>
		    <tbody>
				@forelse($list_potongan_gaji as $potongan_gaji)
					<tr>
						<th>{{ $loop->iteration }}</th>
						<td>{{ $potongan_gaji->keterangan }}</td>
						<td>Rp. {{ number_format($potongan_gaji->nilai_potongan, 0, ',', '.')  }}</td>
						<td>
							<div class="space-x-2">
								<a href="{{ route('potongan-gaji.edit', ['potongan_gaji' => $potongan_gaji]) }}" class="btn">edit</a>
								<form class="inline-flex" action="{{ route('potongan-gaji.destroy', ['potongan_gaji' => $potongan_gaji]) }}" method="post">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-error">hapus</button>
								</form>
							</div>
						</td>
					</tr>
				@empty
					<tr>
						<td colspan="3">
							<h1 class="text-xl text-center text-base-300">belum ada data</h1>
						</td>
					</tr>
				@endforelse
		    </tbody>
		  </table>
		</div>
	</div>
	</div>
</x-app-layout>
