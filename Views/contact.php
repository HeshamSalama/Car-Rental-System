<form id="contact-us" method="POST" >
    <div class="col-xs-12">
        <input type="text" placeholder="Name" id="name">
        <i id="NameError" class="fa fa-warning"></i>
    </div>
    <div class="col-xs-12">
        <input type="text" placeholder="E-mail" id="email">
        <i data-toggle="tooltip" id="EmailError" class="fa fa-warning"></i>

    </div>
    <div class="col-xs-12">
        <input type="text" placeholder="Subject" id="subject">
        <i id="SubjectError" class="fa fa-warning"></i>

    </div>
    <div class="col-xs-12">
        <textarea placeholder="Message" id="message"></textarea>
        <i id="MessageError" class="fa fa-warning"></i>

    </div>
    <div class="text-right">
        <button class="btn-blue" type="submit">Send</button>
        <div id="status"></div>
</form>