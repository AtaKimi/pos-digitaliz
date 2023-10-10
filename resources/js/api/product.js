async function updateStatusProduct(status, product_id, bearerToken) {
    const response = await fetch(`http://localhost:8000/api/product/${product_id}/status`, {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${bearerToken}`,
        },
        body: JSON.stringify({
            status,
        }),
    });

    if (response.status === 200) {
        console.log('success')
    } else {
        console.log('failed')
    }
}