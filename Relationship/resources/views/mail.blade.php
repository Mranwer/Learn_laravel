<div>
    <form action="send-email" method="Post">
        @csrf
        <input type="email" name="email" placeholder="Enter your Valid email">
        <br>
        <br>
        <input type="text" name="subject" placeholder="Enter your Subject">
        <br>
        <br>
        <textarea name="message" placeholder="Enter your Message">    
        </textarea>
        <br>
        <br>
        <button>send email</button>
    </form>
</div>