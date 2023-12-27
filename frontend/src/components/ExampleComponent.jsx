import React, { useState, useEffect } from 'react';

const ExampleComponent = () => {
  const [data, setData] = useState({});

  useEffect(() => {
    // สร้างฟังก์ชั่นเพื่อเรียกใช้ API
    const fetchData = async () => {
      try {
        const response = await fetch('/api/example');
        const result = await response.json();
        setData(result);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    fetchData(); // เรียกใช้ฟังก์ชั่นเมื่อ Component ถูก Mount
  }, []);

  return (
    <div>
      <h1>{data.id}</h1>
      <h1>{data.name}</h1>
      <h1>{data.email}</h1>
      <h1>{data.password}</h1>
    </div>
  );
};

export default ExampleComponent;