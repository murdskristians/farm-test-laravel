import React from 'react';
import ReactDOM from 'react-dom/client';

function Animals() {
    return (
        <div className="container">
            <h1>Animals</h1>
            <a href="/animals/create" className="btn btn-primary">Add Animal</a>
            {/* Add your animals listing here */}
        </div>
    );
}

export default Animals;

if (document.getElementById('animals')) {
    const Index = ReactDOM.createRoot(document.getElementById('animals'));
    Index.render(
        <React.StrictMode>
            <Animals />
        </React.StrictMode>
    );
}
