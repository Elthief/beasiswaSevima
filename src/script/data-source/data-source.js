class DataSource {
    static cariDataCovid() {
        return fetch(`https://opendata.arcgis.com/datasets/0c0f4558f1e548b68a1c82112744bad3_0.geojson`)
            .then(response => {
                return response.json();
            })
            .then(responseJson => {
                if (responseJson.dataCovid) {
                    return Promise.resolve(responseJson.dataCovid);
                } else {
                    return Promise.reject(`Data tidak ditemukan`)
                }
            })
    }
}

export default DataSource;