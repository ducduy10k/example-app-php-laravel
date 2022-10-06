<x-layout>
    <form action="/listings" method="post">
        @csrf
        <input type="text" name="name" id="" value="{{ old('name') }}" />
        @error('name')
        <p>{{ $message }}</p>
        @enderror
        <input
            type="text"
            name="description"
            id=""
            value="{{ old('description') }}"
        />
        @error('description')
        <p>{{ $message }}</p>
        @enderror
        <button type="submit">Create</button>
    </form>
</x-layout>
