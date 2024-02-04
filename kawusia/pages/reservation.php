<div class="reservation_container">
    <div class="open_hours">
        <table>
            <tr>
                <td colspan="8">Godziny Otwarcia</td>
            </tr>
            <tr>
                <td></td>
                <td>Poniedziałek</td>
                <td>Wtorek</td>
                <td>Środa</td>
                <td>Czwartek</td>
                <td>Piątek</td>
                <td>Sobota</td>
                <td>Niedziela</td>
            </tr>
            <tr>
                <td>Otwarcie</td>
                <td>8:00</td>
                <td>8:00</td>
                <td>8:00</td>
                <td>8:00</td>
                <td>8:00</td>
                <td>8:00</td>
                <td>8:00</td>
        </tr>
        <tr>
            <td>Zamknięcie</td>
            <td>18:00</td>
            <td>18:00</td>
            <td>18:00</td>
            <td>18:00</td>
            <td>18:00</td>
            <td>18:00</td>
            <td>18:00</td>
        </tr>
    </table>
</div>
<div class="reservation_form">
    <div class="reservation_text">
        <h1>Opcja niedostępna dla niezalogowanych użytkowników.</h1>
    </div>
    <div class="reservation_image_box">
        <img src="images/coffee_icon.png" alt="coffee_icon">
    </div>
    
</div>
</div>

<script>
    $(".reservation_image_box").click(function(){
    $(".reservation_image_box").animate({
        'width':'200px',
        'height':'200px'
    }, 'fast');
    $(".reservation_image_box").animate({
        'width':'20px',
        'height':'20px'
    }, 'fast');
    $(".reservation_image_box").animate({
        'width':'50px',
        'height':'50px'
    }, 'slow');
}); 
</script>