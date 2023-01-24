import React from 'react';

function Success({ success }) {
  return (
    <div>
      <div className="alert alert-success my-5" role="alert">
        {success}
      </div>
    </div>
  );
}

export default Success;
