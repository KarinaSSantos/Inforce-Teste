$("#form-conversor").submit(function (e) {
    e.preventDefault();
    $.ajax({
        url: "{{ route('converter') }}",
        data: $("#form-conversor").serialize(),
        success: function (resposta) {
            $("#resultado").html('R$ ' + resposta.value);
            $("#cotacao").html('R$ ' + resposta.currency);
        }
    });
});