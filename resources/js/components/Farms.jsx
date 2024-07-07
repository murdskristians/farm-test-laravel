import React from 'react';
import ReactDOM from 'react-dom/client';

function Farms() {
    return (
        <div className="container">
            <h1>Farms</h1>
            <a href="/farms/create" className="btn btn-primary">Create Farm</a>
            {/* Add your farms listing here */}
        </div>
    );
}

export default Farms;

if (document.getElementById('farms')) {
    const Index = ReactDOM.createRoot(document.getElementById('farms'));
    Index.render(
        <React.StrictMode>
            <Farms />
        </React.StrictMode>
    );
}
