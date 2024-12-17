const controller = new AbortController();
const signal = controller.signal;

const postData = async () => {
    try {
        const response = await fetch('https://example.com', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ id: '1' }),
            signal: signal
        });

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const data = await response.json();
        console.log('Success:', data);
    } catch (error) {
        console.error('Error:', error);
    } finally {
        console.log('Request completed');
    }
};

// Abort the request if needed
// controller.abort();

postData();
