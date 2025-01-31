<x-app-layout>
	<div class="space-y-6" style="margin-top: 30px">
		<div class="bg-white rounded-lg shadow-lg p-4">
	<form method="post" class="grid gap-4">
		@csrf

		<x-form-control>
			<x-label>pilih bulan</x-label>
			<select name="periode_id" id="" class="select select-bordered">
				@forelse($list_periode as $p)
				<option value="{{ $p->id }}">{{ date('F, Y', strtotime($p->dari)) }}</option>
				@empty
				<option>belum ada data</option>
				@endforelse
			</select>
			@error('periode_id')
			<x-error-label>{{ $message }}</x-error-label>
			@enderror
		</x-form-control>

		<div class="flex justify-end">
			<button class="btn">unduh berkas</button>
		</div>
	</form>
		</div>
	</div>
</x-app-layout>