class DataSource {
    static cariDataCovid(keyword) {
        return fetch(`https://opendata.arcgis.com/datasets/0c0f4558f1e548b68a1c82112744bad3_0.geojson`)
            .then(response => {
                return response.json();
            })
            .then(responseJson => {
                if (responseJson.features) {
                    return Promise.resolve(responseJson.features);
                } else {
                    return Promise.reject(`${keyword} is not found`)
                }
            })
    }
}

export default DataSource;