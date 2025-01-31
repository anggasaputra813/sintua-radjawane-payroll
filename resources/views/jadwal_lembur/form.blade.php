<x-app-layout>
	<div class="space-y-6" style="margin-top: 30px">
		<div class="bg-white rounded-lg shadow-lg p-4">
	<form method="get" class="grid gap-4">
		<x-form-control>
			<x-label>pilih bulan</x-label>
			<select required name="periode_id" class="select select-bordered w-full">
				@foreach($list_periode as $p)
					@php
						$timezone = new DateTimeZone('Asia/Jakarta');
						$datetime = new DateTime($p->tanggal, $timezone);
					@endphp
					<option value="{{ $p->id }}">{{ $datetime->format('F') }}</option>
				@endforeach
			</select>
		</x-form-control>

		<div class="flex justify-end">
			<button type="submit" class="btn">apply</button>
		</div>
	</form>
		</div>
	</div>
</x-app-layout>