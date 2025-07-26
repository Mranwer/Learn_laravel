<div>
    {{-- <form action="create-user" method="post">
        @csrf
        <input type="text" name="name" placeholder="enter your name">
        <br>
        <br>
        <input type="email" name="email" placeholder="enter your email">
        <button type="submit">submit</button>
    </form> --}}
        <form action="user-form" method="post">
        @csrf
        <input type="text" name="name" placeholder="enter your name">
        <br>
        <br>
        <input type="email" name="email" placeholder="enter your email">
        <input type="tel" name="phone" placeholder="enter your phone">
        <button type="submit">submit</button>
    </form>
</div>
