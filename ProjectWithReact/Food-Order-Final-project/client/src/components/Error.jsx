import React from 'react';

function Error({ error }) {
  return (
    <div>
      <div className="alert alert-danger my-5" role="alert">
        {error}
      </div>
    </div>
  );
}

export default Error;
