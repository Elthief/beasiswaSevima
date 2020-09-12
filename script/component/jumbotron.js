class Jumbotron extends HTMLElement {

    connectedCallback() {
        this.render();
    }

    render() {
        this.innerHTML = `
        <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .jumbotron {
            background: url('https://www.futuremarketsinc.com/wp-content/uploads/2020/05/WxgePFJHTNAQRBuP3g5hoM-scaled.jpg');
            height: 500px;
            background-size: cover;
            background-position: center;
            text-align: center;
        }
        .container h1 {
            margin-top: 100px;
            color: white;
            font-weight: 700;
        }

        .container p {
            color: white;
            font-size: 25px;
            font-weight:400;
        }
        </style>
        
        <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <h1 class="display-4">INFORMASI SEPUTAR COVID-19</h1>
        <p class="lead">Bersama kita lawan Covid-19</p>
        </div>
    </div>
        `;
    }
}

customElements.define("jumbo-tron", Jumbotron);