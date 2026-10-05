const lomake = document.getElementById("opiskelijaForm");

lomake.addEventListener("submit", async function (event) {
    event.preventDefault();

    const opiskelija = {
        etunimi: document.getElementById("etunimi").value,
        sukunimi: document.getElementById("sukunimi").value,
        email: document.getElementById("email").value,
        puhelin: document.getElementById("puhelin").value
    };

    const vastaus = await fetch("api.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(opiskelija)
    });

    const tulos = await vastaus.json();

    document.getElementById("viesti").textContent = tulos.viesti;

    if (tulos.success) {
        lomake.reset();
    }
});