<nav aria-label="Page navigation">
  <ul class="pagination justify-content-center">
      <?php if ($this->Paginator->hasPrev()): ?>
        <?php echo $this->Paginator->prev(); ?>
      <?php endif; ?>
      <?php echo $this->Paginator->numbers(); ?>
      <?php if ($this->Paginator->hasNext()): ?>
        <?php echo $this->Paginator->next(); ?>
      <?php endif; ?>
  </ul>
</nav>
