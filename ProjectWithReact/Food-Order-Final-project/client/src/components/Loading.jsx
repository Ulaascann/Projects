import React from 'react';

function Loading() {
  return (
    <div>
      <div
        className="spinner-border text-success my-5"
        role="status"
        style={{ height: '80px', width: '80px' }}
      >
        <span className="visually-hidden">Loading...</span>
      </div>
    </div>
  );
}

export default Loading;
