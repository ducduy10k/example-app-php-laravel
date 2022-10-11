<x-layout>
    <form action="/login" method="post">
        @csrf
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

        <button type="submit">Login</button>
    </form>
</x-layout>
