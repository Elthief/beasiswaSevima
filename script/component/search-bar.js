class SearchBar extends HTMLElement {

    connectedCallback() {
        this.render();
    }

    set clickEvent(event) {
        this._clickEvent = event;
        this.render();
    }

    get value() {
        return this.querySelector("#searchElement").value;
    }

    render() {
        this.innerHTML = `
         <style>
            .search-container {
                margin: auto;
                max-width: 600px;
                box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2);
                padding: 7px;
                border-radius: 10px;
                display: flex;
                position: static;
                top: 5px;
                background-color: #A994A7;
            }

            .search-container > input {
                width: 75%;
                padding: 5px;
                border: 0;
                border-bottom: 1px solid #D186A0;
                font-weight: lighter;
            }

            .search-container > input:focus {
                outline: 0;
                border-bottom: 2px solid #D186A0;
            }

            .search-container > input:focus::placeholder {
                font-weight: bold;
            }

            .search-container >  input::placeholder {
                color: #D186A0;
                font-weight: normal;
            }

            .search-container > button {
                width: 23%;
                cursor: pointer;
                margin-left: auto;
                padding: 10px;
                background-color: #884A6F;
                color: white;
                border: 0;
                text-transform: uppercase;
            }

            @media screen and (max-width: 550px){
                .search-container {
                    flex-direction: column;
                    position: static;
                    max-width: 70%;
                }

                .search-container > input {
                    width: 100%;
                    margin-bottom: 12px;
                }

                .search-container > button {
                    width: 100%;
                }
            }
        </style>
        <div id="search-container" class="search-container">
            <input placeholder= "Cari data Covid-19 di Provinsimu" id="searchElement" type="search">
            <button id="searchButtonElement" type="submit">search</button>
        </div>
        `;

        this.querySelector("#searchButtonElement").addEventListener("click", this._clickEvent);
    }
}

customElements.define("search-bar", SearchBar);