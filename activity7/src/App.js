import './App.css';
import './queue.css'

function App() {
  return (
    <div className="grid-container">
      <div className="item1 p-0"><button className="buttons white-font bg-primary fs10">Regular</button></div>
      <div className="item2 p-0"><button className="buttons white-font bg-success fs10">Regular</button></div>
      <div className="item3"><button className="buttons fw-bold light-green f-green">COUNTER 1</button></div>  
      <div className="item4"><button className="buttons fw-bold light-green f-green">COUNTER 2</button></div>
      <div className="item5"><button className="buttons fw-bold light-green f-green">SENIOR / PWD</button></div>
      <div className="item6 p-1 light-yellow">
        <p class="fw-bold m-0 pt-3 f-brown">Now Serving</p>
        <p class="fs50 m-0 p-0 f-pink">001</p>
        <p class="fs10 fw-bold m-0 p-0 f-brown">Please proceed to the counter</p>
      </div>
      <div className="item7 p-1 light-yellow">
        <p class="fw-bold m-0 p-0 f-brown pt-3">Now Serving</p>
        <p class="fs50 m-0 p-0 f-pink">002</p>
        <p class="fs10 fw-bold m-0 p-0 f-brown">Please proceed to the counter</p>
      </div>  
      <div className="item8 p-1 light-yellow">
        <p class="fw-bold m-0 p-0 f-brown pt-3">Now Serving</p>
        <p class="fs50 m-0 p-0 f-pink">009</p>
        <p class="fs10 fw-bold m-0 p-0 f-brown">Please proceed to the counter</p>
        </div>
      <div className="item9 text-center p-5 aqua-blue">
        <p class="fs10">This is your Queue</p>
        <p class="fs50">001</p>
        <p class="fs10">Please wait on your queue to be called and proceed to your designated counter</p>
        <p class="fs10 fw-bold">Thanks for using My Queueing System</p>
      </div>
      <div className="item10"><h6 class="pt-4 fs10">NEXT</h6></div>
      <div className="item11"><h6 class="pt-4 fs10">TRANSFER</h6></div>  
      <div className="item12"><h6 class="pt-4 fs10">SERVE</h6></div>
      <div className="item13 light-blue fs10 pt-4 light-blue">Total Served: 10</div>
      <div className="item14 light-blue fs10 pt-4 light-blue">Total Pending: 5</div>
      <div className="item15 light-blue fs10 pt-4 light-blue">Over all Total: 15</div>
      <div className="item16 fw-bold"><marquee direction="left">Welcome to My Queueing System I am Counter 1</marquee></div>
    </div>
  );
}

export default App;