import dotenv from 'dotenv';

// Load .env file
dotenv.config();

const API_KEY = process.env.HTML_TO_DESIGN_API_KEY;

if (!API_KEY) {
  console.error('❌ HTML_TO_DESIGN_API_KEY not found in environment');
  process.exit(1);
}

console.log('🔑 API Key loaded successfully');
console.log(`📏 Key length: ${API_KEY.length}`);
console.log(`🔐 Key starts with: ${API_KEY.substring(0, 10)}...`);

async function testAPI() {
  try {
    console.log('\n🧪 Testing HTML-to-Design API...');
    
    const testHtml = '<html><body><h1>Test Page</h1><p>This is a test conversion.</p></body></html>';
    
    console.log('📤 Sending test HTML...');
    
    const response = await fetch('https://api.to.design/convert', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': `Bearer ${API_KEY}`,
      },
      body: JSON.stringify({ html: testHtml }),
    });
    
    console.log(`📥 Response status: ${response.status}`);
    console.log(`📋 Response headers:`, Object.fromEntries(response.headers.entries()));
    
    if (response.ok) {
      const data = await response.json();
      console.log('✅ API call successful!');
      console.log('📊 Response data:', data);
    } else {
      const errorText = await response.text();
      console.log('❌ API call failed');
      console.log('📄 Error response:', errorText);
    }
    
  } catch (error) {
    console.error('💥 Fetch error:', error.message);
    console.error('🔍 Error details:', error);
  }
}

testAPI();
