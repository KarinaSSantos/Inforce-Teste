
$("#form-conversor").submit(function (e) {
    e.preventDefault();
    $.ajax({
        url: "{{ route('converter') }}",
        data: $("#form-conversor").serialize(),
        success: function (resposta) {
            $("#resultado").html(resposta.value);
            $("#cotacao").html(resposta.currency);
        }
    });
});