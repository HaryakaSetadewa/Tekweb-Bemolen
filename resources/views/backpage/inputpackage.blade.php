<x-admin-layout>
    <div class="p-4">
        <div class="font-bold text-lg mb-4">
            {{ $title }}
        </div>

        <form enctype="multipart/form-data" action="{{(isset($package))?route('adminpackage.update', $package->package_id):route('adminpackage.store') }}" method="POST" class="bg-white rounded-xl">
            @csrf
            @if (isset($package))@method('PUT')@endif

            <div class="mb-4 mx-4 pt-4">
                <label for="package_code" class="block text-sm font-medium text-gray-600">Package Code</label>
                <input type="text" name="package_code" value="{{(isset($package))?$package->package_code:old('package_code')}}" placeholder="Package Code (P001)" required class="mt-1 p-2 w-full border rounded-md">
                @error('package_code')
                    <div class="text-xs text-red-800">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4 mx-4">
                <label for="package_name" class="block text-sm font-medium text-gray-600">Package Name</label>
                <input type="text" name="package_name" value="{{(isset($package))?$package->package_name:old('package_name')}}" placeholder="Package Name" required class="mt-1 p-2 w-full border rounded-md">
                @error('package_name')
                    <div class="text-xs text-red-800">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4 mx-4">
                <label for="package_desc" class="block text-sm font-medium text-gray-600">Deskripsi</label>
                <textarea name="package_desc" id="package_desc" cols="30" rows="2" class="w-full">{{(isset($package))?$package->package_desc:old('package_desc')}}</textarea>
                @error('package_desc')
                    <div class="text-xs text-red-800">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4 mx-4">
                <label for="feature_img" class="block text-sm font-medium text-gray-600">Gambar</label>
                <input type="text" name="feature_img" value="{{(isset($package))?$package->feature_img:old('feature_img')}}" placeholder="Link Gambar" required class="mt-1 p-2 w-full border rounded-md">
                <!-- <input type="file" name="feature_img" id="feature_img" class="w-1/2">-->
                @error('feature_img')
                    <div class="text-xs text-red-800">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4 mx-4">
                <label for="comunity_id" class="block text-sm font-medium text-gray-600">Comunity Id</label>
                <select name="comunity_id" id="comunity_id" class="mt-1 p-2 w-full border rounded-md">
                    <option value="">Choose Comunity</option>
                    @foreach ($comunities as $item)
                        <option 
                        {{((isset($package)&&$package->comunity_id==$item->comunity_id) || old('comunity_id')==$item->comunity_id)?'selected':''}}
                        value="{{$item->comunity_id}}"> {{$item->comunity_name}}</option>
                    @endforeach
                </select>
                @error('comunity_id')
                    <div class="text-xs text-red-800">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md mx-4 mb-4">Save</button>
        </form>
    </div>
</x-admin-layout>