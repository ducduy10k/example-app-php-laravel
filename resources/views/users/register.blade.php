<x-layout>
    <form action="/users" method="post">
        @csrf
        <input
            type="text"
            name="name"
            id=""
            value="{{ old('name') }}"
            placeholder="name"
        />
        @error('name')
        <p>{{ $message }}</p>
        @enderror

        <input
            type="text"
            name="email"
            id=""
            placeholder="email"
            value="{{ old('email') }}"
        />
        @error('email')
        <p>{{ $message }}</p>
        @enderror
        <input
            type="password"
            name="password"
            id=""
            value="{{ old('password') }}"
            placeholder="password"
        />
        @error('password')
        <p>{{ $message }}</p>
        @enderror
        <input
            type="password"
            name="password_confirmation"
            id=""
            placeholder="password_confirmation"
            value="{{ old('password_confirmation') }}"
        />
        @error('password_confirmation')
        <p>{{ $message }}</p>
        @enderror
        <button type="submit">Create</button>
    </form>
</x-layout>
