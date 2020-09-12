import '../component/covid-list';
import '../component/search-bar';
import DataSource from '../data/data-source.js';

const main = () => {
    const searchElement = document.querySelector("search-bar");
    const covidListElement = document.querySelector("covid-list");

    const onButtonSearchClicked = () => {
        DataSource.cariDataCovid(searchElement.value)
            .then(renderResult)
            .catch(fallbackResult)
    };

    const renderResult = results => {
        covidListElement.covids = results;
    };

    const fallbackResult = message => {
        covidListElement.renderError(message);
    };

    searchElement.clickEvent = onButtonSearchClicked;
}

export default main;