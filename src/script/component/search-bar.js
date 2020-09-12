class SearchBar extends HTMLElement {

    connectedCallback() {
        this.render();
    }

    set clickEvent(event) {
        this._clickeEvent = event;
        this.render();
    }

    get value() {
        return this.querySelector("#searchElement").value;
    }

    render() {
        this.innerHTML = `
        <form class="form-inline">
            <input class="form-control mr-sm-2" id="searchElement" type="search" placeholder="Cari data covid" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" id="searchButtonElement" type="submit">Cari</button>
        </form>
        `;
        this.querySelector("#searchButtonElement").addEventListener("click", this._clickEvent);
    }
}

customElements.define("search-bar", SearchBar);